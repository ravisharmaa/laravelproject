<div class="form-group">
    {{Form:: label('title','Work Title')}}
    {{Form:: text('title',null,['placeholder'=>'Enter Work Title', 'class'=>'form-control'])}}
</div>
<div class="form-group">
{{Form:: label('desc','Work Description')}}
{{Form:: textarea('desc',null,['placeholder'=>'Enter Work Description','class'=>'form-control'])}}
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
{{Form:: button($submitButton,['class'=>'btn btn-primary','name'=>'save','type'=>'submit'])}}
