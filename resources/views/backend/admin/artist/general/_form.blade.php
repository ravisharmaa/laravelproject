<div class="form-group">
    {{Form:: label('name','Artist Name')}}
    {{Form:: text('artist_name',null,['placeholder'=>'Enter Artist Name', 'class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form:: label('name','Album Name')}}
    {{Form:: text('album_name',null,['placeholder'=>'Enter Album Name', 'class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form:: label('listener','Listener')}}
    {{Form:: text('listener',null,['placeholder'=>'Enter Listener', 'class'=>'form-control'])}}
</div>
{{Form:: button($submitButton,['class'=>'btn btn-primary','type'=>'submit'])}}
{{Form:: button('Reset',['class'=>'btn btn-danger','type'=>'reset'])}}
