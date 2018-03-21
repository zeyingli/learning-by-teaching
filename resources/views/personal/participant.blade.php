@extends('layouts.app')

@section('template_title')
Participant List
@endsection

@section('template_linked_css')
  	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <style type="text/css" media="screen">
        .map-table {
            border: 0;
        }
        .map-table tr td:first-child {
            padding-left: 15px;
        }
        .map-table tr td:last-child {
            padding-right: 15px;
        }
        .map-table.table-responsive,
        .map-table.table-responsive table {
            margin-bottom: 0;
        }

    </style>
@endsection

@section('content')

	<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            Showing Participant List
                   
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="table-responsive map-table">
                            <table class="table table-striped table-condensed data-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th class="hidden-xs">Participant Name</th>
                                        <th class="hidden-xs">Location</th>
                                        <th class="hidden-sm hidden-xs hidden-md">Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td class="hidden-xs">{{ $user->name }}</td>
                                            <td class="hidden-xs">
                                                @if($user->location == 1)
                                                <span class="label label-primary">北京</span>
                                                @elseif($user->location == 2)
                                                <span class="label label-success">江苏</span>
                                                @elseif($user->location == 3)
                                                <span class="label label-danger">四川</span>
                                                @elseif($user->location == 4)
                                                <span class="label label-warning">湖北</span>
                                                @elseif($user->location == 5)
                                                <span class="label label-success">广东</span>
                                                @elseif($user->location == 6)
                                                <span class="label label-warning">陕西</span>
                                                @elseif($user->location == 7)
                                                <span class="label label-success">香港</span>
                                                @elseif($user->location == 8)
                                                <span class="label label-primary">山东</span>
                                                @elseif($user->location == 9)
                                                <span class="label label-primary">辽宁</span>
                                                @elseif($user->location == 10)
                                                <span class="label label-primary">内蒙古</span>
                                                @else
                                                <span class="label label-info">未知</span>
                                                @endif
                                            </td>
                                            <td class="hidden-sm hidden-xs hidden-md">{{$user->created_at}}</td>
                                            <td>
                                                <a class="btn btn-sm btn-success btn-block" href="{{ URL::to('show/' . $user->id) }}" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Show</span><span class="hidden-xs hidden-sm hidden-md"> On the Map</span>
                                                </a>
                                            </td>
                                            </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
                                           