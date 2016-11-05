<div id="create_note" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      @include('errors.error')
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-ok"></i> Create Note</h4>
      </div>
      <div class="modal-body">
        {{Form:: open(['route'=>'note.store', 'method'=>'post', 'role'=>'form-role'])}}
            @include('backend.includes.errors')
            @include('backend.admin.note._general._form',['submitButton'=>'Save Values'])
        {{Form:: close()}}
      </div>
    </div>

  </div>
</div> 