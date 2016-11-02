<div id="mymodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
<!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Note</h4>
      </div>
      <div class="modal-body">
        {{Form:: open(['route'=>'todo.store', 'method'=>'post', 'role'=>'form-role'])}}
            @include('backend.admin.todo.general._form',['submitButton'=>'Save Values'])
        {{Form:: close()}}
      </div>
    </div>

  </div>
</div>