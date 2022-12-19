@extends('layouts.main')
@section('content')
<main class="blog">
    <div class="container">
        <h4 class="edica-page-title" data-aos="fade-up">Категория: {{ $category->title }}</h4>
        <section class="featured-posts-section">
            <div class="row">
                @if ($posts->count() > 0)
                @foreach ($posts as $post)
                <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="{{ asset('storage/'. $post->preview_image) }}" alt="blog post">
                    </div>
                    <div class="d-flex justify-content-between pr-3">
                        <p class="blog-post-category">{{ $post->category->title }}</p>

                        <form action="{{  route('post.like.store', ['id' => $post->id]) }}" method="post">
                            @csrf
                            @if ($post->liked_users_count)
                            <span>{{ $post->liked_users_count }}</span>
                            @endif
                            <button type="submit" class=" border-0 bg-transparent">
                                @auth()
                                @if (auth()->user()->likedPosts->contains($post->id))
                                <i class="fas fa-heart"></i>
                                @else
                                <i class="far fa-heart"></i>
                                @endif

                                @endauth
                            </button>
                            @guest
                            <i class="far fa-heart"></i>
                            @endguest
                        </form>
                    </div>
                    <a href="{{ route('post.show', ['id' => $post->id])}}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{ $post->title }}</h6>
                    </a>
                </div>
                @endforeach
                @else
                <div class="col-md-4 offset-2 fetured-post blog-post">
                    <p>В этой категории пока нет статей...</p>
                </div>
                @endif
                
            </div>
            <div class="row">
                <div class="mx-auto" style="margin-top: -100px;">
                    {{ $posts->links() }}
                </div>
            </div>
        </section>
    </div>
</div>

</main>
@endsection