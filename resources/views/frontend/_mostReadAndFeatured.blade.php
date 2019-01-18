<!-- post widget -->
<div class="aside-widget">
    <div class="section-title">
        <h2>Most Read</h2>
    </div>

    @foreach($popular_posts as $post)
        <div class="post post-widget">
            <a class="post-img" href="{{ route('details',$post->id) }}"><img src="{{ asset($post->image) }}" alt=""></a>
            <div class="post-body">
                <h3 class="post-title"><a href="{{ route('details',$post->id) }}">{{ $post->title }}</a></h3>
            </div>
        </div>
    @endforeach
</div>
<!-- /post widget -->

<!-- post widget -->
<div class="aside-widget">
    <div class="section-title">
        <h2>Featured Posts</h2>
    </div>
    @foreach($last2featureds as $post)
        <div class="post post-thumb">
            <a class="post-img" href="{{ route('details',$post->id) }}"><img src="{{ asset($post->image) }}" alt=""></a>
            <div class="post-body">
                <div class="post-meta">
                    <a class="post-category cat-3" href="#">{{ $post->relCategory->name }}</a>
                    <span class="post-date">{{ date('d M Y',strtotime($post->published_date)) }}</span>
                </div>
                <h3 class="post-title"><a href="{{ route('details',$post->id) }}">{{ $post->title }}</a></h3>
            </div>
        </div>
    @endforeach

</div>
<!-- /post widget -->