@extends('backend.layouts.master')
@section('main-content')
<div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Form Elements</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                @include('errors.error')
                {{Form:: open(['route'=>'todo.store', 'method'=>'post', 'role'=>'form-role'])}}
                    @include('backend.admin.todo.general._form',['submitButton'=>'Save Values'])
                {{Form:: close()}}

            </div>
        </div>
    </div>
    @endsection