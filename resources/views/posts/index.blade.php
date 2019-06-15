@extends('layouts.master')


@section('content')

	
    <main role="main" class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">


          @foreach($posts as $post)

            @include('posts.posts')

          @endforeach


          
          </div>

        </div><!-- /.row -->

    </main>

@endsection	