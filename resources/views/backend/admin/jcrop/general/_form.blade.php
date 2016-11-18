@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{Session:: get('flash_message')}}
    </div>
@elseif(Session::has('error_message'))
    <div class="alert alert-danger">
        {{Session::get('error_message')}}
    </div>
@endif
<div class="form-group">
    {{Form:: label('title','Title')}}
    {{Form:: text('title',null,['placeholder'=>'Enter Title', 'class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form:: label('rank','Rank')}}
    {{Form:: number('rank',null,['placeholder'=>'Enter Rank', 'class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form:: label('image','Image')}}
    {{Form:: file('image',null,['placeholder'=>'Enter Rank', 'class'=>'form-control', 'id'=> 'image'])}}
</div>
<div class="form-group">
    {{Form:: label('status','Status:')}}
    {!! Form::radio('status', '1', 'true')!!} Active
    {!! Form::radio('status', '0')!!} De-Active
</div>

{{Form:: button($submitButton,['class'=>'btn btn-primary','type'=>'submit'])}}
{{Form:: button('Reset',['class'=>'btn btn-danger','name'=>'reset','type'=>'reset'])}}
