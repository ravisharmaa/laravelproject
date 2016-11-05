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
                <div class="box-content" style="display: block;">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create_note"><i class="glyphicon glyphicon-ok"></i> Create Note</button> <br/> <br/>
                    @include('backend.admin.note.modalbox')
                    <table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Note Title</th>
                            <th>Note Description</th>
                            <th>Rank</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>                   
                            <td></td>
                            <td class="center"></td>
                            <td class="center"></td>
                            <td class="center"></td>
                            <td class="center">
                                <span class="label-warning label label-default">Active</span>
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
                         </tr>
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>

@endsection
@section('extra-scripts')
<script type="text/javascript">
    $('document').ready(function(){
        $('#save-btn').click(function(e){
            e.preventDefault();
        });
    });

</script>
@endsection

