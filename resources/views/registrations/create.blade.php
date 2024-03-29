@extends('layouts.master')


@section('content')

	<div class="col-sm-8">
	
		<h1>Register</h1>

		<form method="POST" action="/register">
		  {{ csrf_field() }}
		  
		  <div class="form-group">
		    <label for="name">Name:</label>
		    <input type="text" class="form-control" name="name" id="name" required value="{{ old('name') }}">
		  </div>
		  
		  <div class="form-group">
		    <label for="email">Email:</label>
		    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
		  </div>

		  <div class="form-group">
		    <label for="password">Password:</label>
		    <input type="password" class="form-control" name="password" id="password" required>
		  </div>

		  <div class="form-group">
		    <label for="password_confirmation">Confirm Password:</label>
		    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
		  </div>
		  
		  <div class="form-group">
		    <button type="submit" class="btn btn-primary">Submit</button>
		  </div>
		
		</form>

		@include('layouts.errors')

	</div>

@endsection