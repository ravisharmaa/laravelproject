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
    {{Form:: label('address','Address')}}
    {{Form:: text('address',null,['placeholder'=>'Enter Address', 'class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form:: label('title','Facebook')}}
    {{Form:: text('facebook',null,['placeholder'=>'Enter Facebook Link', 'class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form:: label('title','Twitter')}}
    {{Form:: text('twitter',null,['placeholder'=>'Enter Twitter Link', 'class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form:: label('about_desc','About Description')}}
    {{Form:: textarea('about_desc',null,['placeholder'=>'Enter About Description','class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form:: label('mail','Mail')}}
    {{Form:: text('mail',null,['placeholder'=>'Enter Twitter Link', 'class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form:: label('gplus','Google plus')}}
    {{Form:: text('gplus', null,['placeholder'=>'Enter Google plus', 'class'=>'form-control'])}}
</div>
{{Form:: button($submitButton,['class'=>'btn btn-primary','type'=>'submit'])}}
{{Form:: button('Reset',['class'=>'btn btn-danger','name'=>'reset','type'=>'reset'])}}
