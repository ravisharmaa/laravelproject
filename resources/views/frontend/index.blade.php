<div>
	@foreach ($gallery as $g)
		<li><a href={{route('gallery.details', $g->slug)}}>{{$g->title}}</a></li>
	@endforeach


</div>