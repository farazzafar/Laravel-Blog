@extends('layouts.master')


@section('content')

<form method="POST" action="/posts">

	{{ csrf_field() }}

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" id="body" class="form-control" ></textarea>
  </div>

  <div class="form-group">
    
    <button type="submit" class="btn btn-primary">Submit</button>

  </div>


  @include('layouts.errors')

</form>


@endsection








