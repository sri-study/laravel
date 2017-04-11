@extends('master')

@section('style')
<style>
.effect{background:#f6c4c4;}
</style>
@stop

@section('script')
<script>
alert('hello blade..');
</script>
@stop

@section('content')
	<ul class='effect'>
	  @foreach($items as $item)
	    <li>{{ $item }}</li>
	  @endforeach
	</ul>

	@if($itemCount = count($items))
	  <p>There are {{ $itemCount }} items !</p>
	@else
	  <p>There is no item !</p>
	@endif

	@forelse($items as $item)
	  <p>The item is {{ $item }}</p>
	@empty
	  <p>There is no item !</p>
	@endforelse

	@for($i=0; $i<10; $i++)
		{{$i}}.
	@endfor
@stop
