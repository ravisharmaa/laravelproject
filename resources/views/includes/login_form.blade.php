<fieldset>
    <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
        {{Form :: text('email',null,['placeholder'=>'Email', 'class'=>'form-control'])}}
    </div>
    <div class="clearfix"></div><br>

    <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
        {{Form :: password('password', ['placeholder'=>'Password', 'class'=>'form-control'])}}
    </div>
    <div class="clearfix"></div>
     
    <div class="clearfix"></div>
</fieldset>