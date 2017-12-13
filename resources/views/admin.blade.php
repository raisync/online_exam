@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Administrator</div>

                <div class="panel-body">
                    <div class="col-md-12 list form">
                        <form>
                            <div class="form-group">
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="question" placeholder="Add subject">
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-sm btn-success">Add</button>
                                    <span class="space"></span>
                                    <button class="btn btn-sm btn-default">Clear</button>
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
                                Laravel
                            </td>
                            <td class="col-md-2">
                                <a href="#" class="btn btn-sm btn-success">Edit</a>
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
