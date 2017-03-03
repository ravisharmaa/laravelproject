
<div class="form-group">
    {{Form:: label('name','Artist Name')}}

    <div id="drop">
        {{Form::select('artist_name',$artist, null,['class'=>'form-control','placeholder'=> 'Select Artist Name','id'=>'select'])}}
    </div>
</div>

<div class="form-group">
    {{Form:: label('name','Album Name')}}
    {{Form:: text('album_name',null,['placeholder'=>'Enter Artist Name', 'class'=>'form-control'])}}
</div>
{{Form:: button($submitButton,['class'=>'btn btn-primary','type'=>'submit'])}}
{{Form:: button('Reset',['class'=>'btn btn-danger','type'=>'reset'])}}

{{--@section('extra-scripts')--}}
 {{--   <script type="text/javascript">--}}
        {{--$('document').ready(function(){--}}
            {{--$('#select').click(function(){--}}
                {{--var select    = $('#select');--}}
                {{--$.get('{{route('album-artist.view')}}',function (data){--}}
                   {{--$.each(data, function(value, display){--}}
                        {{--select.append('<option value =" +value.id+ ">' + display + '</option>');--}}
{{--//                        select.val(select).prop('selected', true);--}}
                   {{--});--}}
                {{--});--}}

            {{--});--}}
        {{--})--}}
    {{--</script>--}}
{{--@endsection--}}
