<div class="form-group">
    {{Form:: label('title','Note Title')}}
    {{Form:: text('title',null,['placeholder'=>'Enter Note Title', 'class'=>'form-control'])}}
</div>
<div class="form-group">
{{Form:: label('desc','Note Description')}}
{{Form:: textarea('description',null,['placeholder'=>'Enter Note Description','class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form:: label('status','Status:')}}
    {!! Form::radio('status', '1', 'true')!!} Active
    {!! Form::radio('status', '0')!!} De-Active
</div>
<div class="form-group">
    {{Form:: label('rank','Rank:')}}
    {{Form:: number('rank', null,['placeholder'=>'Enter Rank Here', 'class'=>'form-control'])}}
</div>
{{Form:: button($submitButton,['class'=>'btn btn-primary','name'=>'save','type'=>'submit','id'=>'save-btn'])}}
{{Form:: button('Reset',['class'=>'btn btn-danger','name'=>'reset','type'=>'reset'])}}
