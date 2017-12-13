@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Administrator</div>

                <div class="panel-body">
                    <div class="col-md-12 list form">
                        <form class="form-horizontal" method="POST" action="{{ url('/exam') }}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="subject" placeholder="Add subject" name="subject" value="{{ old('name') }}" required autofocus>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-sm btn-success" type="submit">Add</button>
                                    <button class="btn btn-sm btn-default" type="reset">Clear</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div>
                        <div class="col-md-12 list">
                            <table>
                                <tr>
                                    <th class="col-md-10">Subjects</th>
                                    <th class="col-md-2">Action</th>
                                </tr>
                        <tr>
                            <td class="col-md-10">
                                @if(count($subjects) > 0)
                                <div class="infinite-scroll">
                                    @foreach($subjects->all() as $subject)
                                    <div class="col-lg-12">
                                        <p style="word-wrap: break-word;">{{ $subject->subject }}</p>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </td>
                            <td class="col-md-2">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
