@extends('backend.layouts.master')
@section('main-content')
<div class="box col-md-12">
            <div class="box-inner">
           
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Listings</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                 <a class="btn btn-success" href="{{route('todo.create')}}"><i class="glyphicon glyphicon-pencil"></i>
                    Create Work </a>
                <div class="box-content" style="display: block;">
                    <table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                        <?php $i=1;?>
                            <th>S.No</th>
                            <th>Work Title</th>
                            <th>Rank</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($data as $d)
                        <tr>
                       
                            <td>{{$i}}</td>
                            <td class="center">{{$d->title}}</td>
                            <td class="center">{{$d->rank}}</td>
                            <td class="center">
                                <span class="label-warning label label-default">Pending</span>
                            </td>
                            <td class="center">
                                <a class="btn btn-success" href="#">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    View
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Delete
                                </a>
                            </td>
                        <?php $i++;?>
                        @endforeach
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection