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
                 @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{Session:: get('flash_message')}}
                </div>
                 @endif
                 <a class="btn btn-success" href="#mymodal" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i>
                    Create Work </a>
                <div class="box-content" style="display: block;">
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
@section('modal-box')
<div class="modal hide fade" id="mymodal">
        <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3>Create Note</h3>
        </div>
        <div class="modal-body">
            <h5>This is modal body</h5>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary">Close</button>
        </div>
</div>
@endsection

@section('extra-scripts')
    <!-- {{Html:: script('assets/backend/js/jquery-2.2.3.min.js')}} -->
<script type="text/javascript">
    alert('foo');
</script>
@endsection
