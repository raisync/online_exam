@extends('layouts.app')

@section('content')
<div class="container">
    @if (Session::get('message') != Null)
    <div class="row">
        <div class="col">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ Session::get('message') }}
            </div>
        </div>
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <span>Administrator</span>
                    <a href="{{ route('create') }}" class="btn btn-sm btn-success">Create Exam</a>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <div class="col-md-12 list">
                            <table class="table-hover">
                                <tr>
                                    <th class="col-md-9">Subjects</th>
                                    <th class="col-md-3">Action</th>
                                </tr>
                                @foreach($subjects as $sub)
                                <tr>
                                    <td class="col-md-9">
                                        {{ $sub->subject }}
                                    </td>
                                    <td class="col-md-3">
                                        <a href="{{ route('view', ['id'=> $sub->id]) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('edit', ['id'=> $sub->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete_sub_{{ $sub->id  }}">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach($subjects as $sub)
        <div class="modal fade" id="delete_sub_{{ $sub->id  }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <form class="" action="{{ route('delete', ['id' => $sub->id]) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header bg-red">
                        <h4 class="modal-title" id="mySmallModalLabel">Delete Subject</h4>
                    </div>


                    <div class="modal-body">
                        Are you sure you want to delete <b>{{ $sub->subject }} </b>?

                    </div>
                    <div class="modal-footer">
                        <a href="{{ url('/') }}">
                            <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Cancel</button>
                        </a>
                        <button type="submit" class="btn btn-sm btn-danger" title="Delete" value="delete">Delete</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    @endforeach
</div>
@endsection
