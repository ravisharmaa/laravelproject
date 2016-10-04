<fieldset>
    <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
        {{Form :: text('email',null,['placeholder'=>'Email', 'class'=>'form-control'])}}
    </div>
    <div class="clearfix"></div><br>
    @if($errors->has('email'))
     <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{$errors->first('email')}}</strong> 
    </div>
    @endif

    <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
        {{Form :: password('password', ['placeholder'=>'Password', 'class'=>'form-control'])}}
    </div>
    <div class="clearfix"></div> <br>
     @if($errors->has('password'))
     <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{$errors->first('password')}}</strong> 
    </div>
    @endif
    <div class="clearfix"></div>
</fieldset>

