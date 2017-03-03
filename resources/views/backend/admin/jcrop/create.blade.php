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
            <div id="validation-errors"></div>
                @include('errors.error')
                {{Form:: open(['route'=>'jcrop.store', 'method'=>'post','id'=>'upload','role'=>'form-role', 'enctype'=>'multipart/form-data'])}}
                    @include('backend.admin.jcrop.general._form',['submitButton'=>'Save Values'])

                {{Form:: close()}}
             </div>
             <div id="output"></div>
        </div>
    </div>
@endsection

{{-- @section('extra-scripts')
<script type="text/javascript">
    $("document").ready(function(){
        var options= {
            beforeSubmit: showRequest,
            success:    showResponse,
            dataType: 'json'
        };
        $("#image").change(function(){
            $("#upload").ajaxForm(options).submit();
        });
    });

    function showRequest(formData, jqForm, options){
        $("#validation-errors").hide().empty();
        return true;
    }

    function showResponse(responce, statusText, xhr, $form){
        if(response.success==false)
        {
            
            var arr= response.errors;
            $.each(arr, function(index, value){
                if(value.length=!0){
                    $("#validation-errors").append('<div class="alert alert-danger">+value+</div');
                }
            });
            $("#validation-errors").show();
        }else{
            $("#output").html("<img src='"+response.file+"'/>");
        }
    }
</script>
@endsection --}}

@section('extra-scripts')
<script type="text/javascript">
    $("document").ready(function(){
        var options= {
            beforeSubmit: showRequest,
            success:    showResponse,
            dataType: 'json'
        };

            $("#image").change(function(){
            $("#upload").ajaxForm(options).submit();
        });
    });

    function showRequest(formData, jqForm, options){
        $("#validation-errors").hide().empty();
        return true;
    }

    function showResponse(response, statusText, xhr, $form){
        if(response.success==false)
        {
        
            var arr= response.errors;
            $.each(arr, function(index, value){
                if(value.length=!0){
                    $("#validation-errors").append('<div class="alert alert-danger">+value+</div');
                }
            });
            $("#validation-errors").show();
        }else{
            console.log(response);
            $("#output").html("<img src='"+response.file+"'/>");
        }
    }
</script>

@endsection

