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
                    <span>Edit Exam</span>
                    <a href="{{ route('index') }}" class="btn btn-sm btn-info">Back</a>
                </div>

                <div class="panel-body">
                    <form action="{{ route('update',['id' => $subjects->id]) }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="card">
                            <div class="card-block">
                                <div class="form-group">
                                    <input name="title" class="form-control" type="text" value="{{$subjects->subject}}" placeholder="Subject" required>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Question No. 1" required>
                                </div>

                                <div class="form-group options">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option A" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option B" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option C" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option D" required>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Question No. 2" required>
                                </div>

                                <div class="form-group options">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option A" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option B" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option C" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option D" required>
                                </div>
                                <hr>
                                
                                <div class="form-group">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Question No. 3" required>
                                </div>

                                <div class="form-group options">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option A" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option B" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option C" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option D" required>
                                </div>
                                <hr>
                                
                                <div class="form-group">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Question No. 4" required>
                                </div>

                                <div class="form-group options">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option A" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option B" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option C" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option D" required>
                                </div>
                                <hr>
                                
                                <div class="form-group">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Question No. 5" required>
                                </div>

                                <div class="form-group options">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option A" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option B" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option C" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option D" required>
                                </div>
                                <hr>
                                
                                <div class="form-group">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Question No. 6" required>
                                </div>

                                <div class="form-group options">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option A" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option B" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option C" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option D" required>
                                </div>
                                <hr>
                                
                                <div class="form-group">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Question No. 7" required>
                                </div>

                                <div class="form-group options">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option A" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option B" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option C" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option D" required>
                                </div>
                                <hr>
                                
                                <div class="form-group">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Question No. 8" required>
                                </div>

                                <div class="form-group options">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option A" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option B" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option C" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option D" required>
                                </div>
                                <hr>
                                
                                <div class="form-group">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Question No. 9" required>
                                </div>

                                <div class="form-group options">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option A" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option B" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option C" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option D" required>
                                </div>
                                <hr>
                                
                                <div class="form-group">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Question No. 10" required>
                                </div>

                                <div class="form-group options">
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option A" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option B" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option C" required>
                                    <input name="title" class="form-control" type="text" value="" placeholder="Option D" required>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                    <a href="{{ route('index') }}" class="btn btn-sm btn-info">Cancel</a>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection