@extends('layouts.master')
@section('content')
	<div class="container">
		
		<form method="POST" action="/strands/store">
			@csrf
		  <div class="form-group">
		 
		    <input type="text" class="form-control" name='name' aria-describedby="emailHelp" placeholder="Strand Name">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection