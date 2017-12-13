@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">List of Exams</div>

                <div class="panel-body">
                    <table>
                        <tr>
                            <th class="col-md-8">
                                Subject
                            </th>
                            <th class="col-md-4">
                                Action
                            </th>
                        </tr>
                        <tr>
                            <td class="col-md-10">
                                Laravel
                            </td>
                            <td class="col-md-2">
                                <a href="#" class="btn btn-sm btn-success">Take exam</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
