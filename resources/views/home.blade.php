@extends('blog.master')

{{-- @section('scripts')
    <script type="text/javascript">
        $('#editor').wysiwyg();
    </script>
@endsection --}}

@section('content')
    <div class="col-sm-8 blog-main">
        <h1 class="h1 text-primary">Create a Post</h1>
        <hr />

        @include('layouts.errors')

        <form method="POST" action="blog" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
            <label for="title">* Title:</label>
            <input type="text" class="form-control" id="title" name="title" maxlength="100">
            </div>
            <div class="form-group">
            <label for="subtitle">* Subtitle:</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" maxlength="100">
            </div>
            <div class="form-group">
            <label for="summernote">* Body:</label>
            <textarea class="form-control" id="body" name="body" placeholder="Body"></textarea>
            <div id="txtEditor"></div>
            </div>
            <div class="form-group">
            <label for="image_file">File input (optional):</label> <br>
            <input type="file" id="image_file" name="image_file">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </form>
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