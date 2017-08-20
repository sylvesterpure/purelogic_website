@extends('blog.master')

@section('content')

    <div class="col-sm-8 blog-main">

        @if (count($posts))
            @foreach ($posts as $post)
                @include('blog.post')
            @endforeach

            {{-- <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav> --}}
        @else

            <div class="blog-post well col-lg-12">
                <h3 class="h3">No Posts Uploaded</h3>
            </div>

        @endif

    </div><!-- /.blog-main -->
@endsection

@section('styles')
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href='{{ asset("css/app.css") }}' rel="stylesheet">
@endsection