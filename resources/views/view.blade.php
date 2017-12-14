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
                    <span>View Exam</span>
                    <a href="{{ route('index') }}" class="btn btn-sm btn-info">Back</a>
                </div>

                <div class="panel-body">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card">
                        <div class="card-block">
                            <div class="form-group">
                                <input name="title" class="form-control" type="text" value="{{ $subjects->subject }}" disabled>
                            </div>
                            <hr>
                            <div class="form-group">
                                <input name="title" class="form-control" type="text" value="" disabled>
                            </div>
                            <div class="form-group options">
                                <input name="title" class="form-control" type="text" value="" disabled>
                                <input name="title" class="form-control" type="text" value="" disabled>
                                <input name="title" class="form-control" type="text" value="" disabled>
                                <input name="title" class="form-control" type="text" value="" disabled>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <div class="pull-right">
                                <a href="{{ route('index') }}" class="btn btn-sm btn-info">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection