@extends('app')
@section('content')
@if ($first=='Lindsa')
	<h1>About us{!!$first!!}{{$last}}</h1>
@endif
@stop

@section('footer')

<?php
$section_name="Culture";
if(($section_name != "Culture") && ($section_name != "Society")) 
	echo "$section_name";
?>
@stop