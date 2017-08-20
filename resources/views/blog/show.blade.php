@extends('blog.master')

@section('content')
	
	<div class="col-sm-8 blog-main">

		<div class="blog-post well col-lg-12">
			<h2 class="blog-post-title col-lg-10 text-primary">
		        {{ $post->title }}
		    </h2>
		    <p class="blog-post-meta col-lg-2">
		    	{{ $post->created_at->toFormattedDateString() }}
			</p>

		    <p class="blog-post-meta col-lg-10">{{ $post->subtitle }}</p>

		    @if (!is_null($post->image_url))
		    	<img src="{{ $post->image_url }}" class="img-responsive col-lg-12">
		    @endif
		    
		    <div class="blog-post-body col-lg-12"> {!! $post->body !!} </div>
		</div><!-- /.blog-post -->
	</div>
@endsection

@section('styles')
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href='{{ asset("css/app.css") }}' rel="stylesheet">
@endsection