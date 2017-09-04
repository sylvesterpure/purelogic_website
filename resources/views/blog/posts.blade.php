<div class="blog-post well col-lg-12">

    <a class="col-lg-4" href="blog/post/{{ $post->seo_url }}">
        @if (!is_null($post->image_url))
            <img src="{{ $post->image_url }}" style="margin: 0 auto;" alt="{{ $post->title }}" class="img-responsive">
        @endif
    </a>

    <div class="col-lg-8">
        <h2 class="blog-post-title col-lg-12">
            <a href="blog/post/{{ $post->seo_url }}">
              {{ $post->title }}
            </a>
        </h2>

        <p class="blog-post-meta col-lg-12">
        	{{ $post->created_at->toFormattedDateString() }}
    	</p>

        <p class="blog-post-meta col-lg-12">{{ $post->subtitle }}</p>
    </div>
</div>