@extends('layouts.master')
@section('content')
	<form method="POST" action="/subject-strands/{{ $subject_strand->id }}/update">
	@csrf
	 <input value ='{{$subject_strand->id}}' type ='hidden' name='id'>
	 <select name ='semester' class='form-control'>
		@foreach($sections as $section)
		<option value='{{$section->id}}'>{{$section->name}}</option>
		@endforeach
	 </select>

    </form>
@endsection