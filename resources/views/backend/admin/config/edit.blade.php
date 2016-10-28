@extends('backend.layouts.master')
@section('main-content')
<div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Config Settings</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                @include('errors.error')
                {{Form:: model($data, ['method'=>'PUT', 'route'=>['config.update', $data->id]])}}
                @include('backend.admin.config.general._form',['submitButton'=>'Update Values'])
                {{Form:: close()}}

            </div>
        </div>
    </div>
@endsection