<div class="blog-post well col-lg-12">

    <h2 class="blog-post-title col-lg-10">
        <a href="blog/post/{{ $post->seo_url }}">
          {{ $post->title }}
        </a>
    </h2>
    <p class="blog-post-meta col-lg-2">
    	{{ $post->created_at->toFormattedDateString() }}
	</p>

    <p class="blog-post-meta col-lg-12">{{ $post->subtitle }}</p>
    
    <div class="blog-post-body col-lg-9"> {!! $post->body !!} </div>

    @if (!is_null($post->image_url))
    	<a href="blog/post/{{ $post->seo_url }}"><img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="img-responsive col-lg-3"></a>
    @endif


</div><!-- /.blog-post -->