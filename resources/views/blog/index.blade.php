@extends('layouts.nav')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="{{'storage/' . $post->main_image}}" alt="blog post">
                    </div>
                    <p class="blog-post-category">{{$post->category->title}}</p>
                    <a href="{{route('blog.single', $post->id)}}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{$post->title}}</h6>
                    </a>
                </div>
                @endforeach
              
            </div>

        </section>
        <div class="row">
            <div class="col-md-8">
                <section>
                    <div class="row blog-post-row">
                        @foreach ($late_posts as $post)
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{'storage/' . $post->main_image}}" alt="blog post">
                                </div>
                                <p class="blog-post-category">{{$post->category->title}}</p>
                                <a href="{{route('blog.single', $post->id)}}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">{{$post->title}}</h6>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
            <div class="col-md-4 sidebar" data-aos="fade-left">
           
                <div class="widget widget-post-list">
                    <h5 class="widget-title">Post List</h5>
                    <ul class="post-list">
                       @foreach ($latest_posts as $post)
                            <li class="post">
                                <a href="{{route('blog.single', $post->id)}}" class="post-permalink media">
                                    <img src="{{'storage/' . $post->main_image}}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">{{$post->title}}</h6>
                                    </div>
                                </a>
                            </li>
                       @endforeach
                      
                    </ul>
                </div>
               
            </div>
        </div>
    </div>

</main>
@endsection
