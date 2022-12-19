@extends('layouts.main')

@section('content')
<main class="blog-post">
	<div class="container">
		<h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h1>
		<p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">• {{ $date->translatedFormat('F') }} {{ $date->day }}, {{ $date->year }} • {{ $date->format('H:i')}} • {{ $post->comments->count() ? $post->comments->count() . " Комментарий/ев" : "" }} </p>

		<section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
			<img src="{{ asset('storage/' . $post->main_image) }}" alt="featured image" class="w-100">
		</section>
		<section class="post-content">
			{!! $post->content !!} 
		</section>
		<div class="row float-right mr-3">
			
			<form action="{{  route('post.like.store', ['id' => $post->id]) }}" method="post">
				@csrf
				
				<button type="submit" class=" border-0 bg-transparent">
					@auth()
					@if (auth()->user()->likedPosts->contains($post->id))
					<i class="fas fa-heart"></i>
					@else
					<span class="mr-3">Поставить Like</span>
					<i class="far fa-heart"></i>
					@endif

					@endauth

				</button>
				@guest
				<i class="far fa-heart"></i>
				@endguest
				@if ($post->liked_users_count)
				<span>{{ $post->liked_users_count }}</span>
				@endif
			</form>
		</div>
		<div class="row">
			<div class="col-lg-9 mx-auto">
				@if ($relatedPosts->count() > 0)
				<section class="related-posts">
					<h2 class="section-title mb-4" data-aos="fade-up">Похожие статьи</h2>
					<div class="row">
						@foreach ($relatedPosts as $relatedPost)
						<div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
							<a href="{{ route('post.show', ['id' => $relatedPost->id]) }}"><img height="254px" src="{{ asset('storage/' . $relatedPost->preview_image ) }}" alt="related post" class="post-thumbnail"></a>
							<p class="post-category">{{ $relatedPost->category->title }}</p>
							<h5 class="post-title">{{ $relatedPost->title }}</h5>
						</div>
						@endforeach
						
					</div>
				</section>
				@endif
				
				<section class="mt-5">
					<h2 class="section-title mb-4" data-aos="fade-up">Комментарии ({{ $post->comments->count() }})</h2>
					@foreach ($post->comments as $comment)
					<div class="card card-widget mt-2">
						<div class="card-footer card-comments">
							<div class="card-comment">

								<div class="row">
									<div class="col-md-2">
										<img class="img-circle img-sm float-left d-block" src="../dist/img/user3-128x128.jpg" alt="User Image">
									</div>
									<div class="comment-text col-md-10 clearfix">
										<span class="username ml-2">

											<span>Имя автора: <b>{{ $comment->user->name }}</b></span>


											<span class="text-muted float-right">{{ $comment->getDateAsCarbonAttribute('created_at')->diffForHumans() }}</span>

										</span>
										<div class="ml-2">
											{{ $comment->content }}
										</div>


									</div>
								</div>


							</div>


						</div>
					</div>
					@endforeach

				</section>

				<section class="comment-section">
					@if (Auth::check())
					<h2 class="section-title mb-5" data-aos="fade-up">Оставте комментарий</h2>
					<form action="{{ route('post.comment.store' ,['id' => $post->id])}}" method="post">
						@csrf
						<div class="row">
							<div class="form-group col-12" data-aos="fade-up">
								<label for="content" class="sr-only">Комментарий</label>
								<textarea name="content" id="content" class="form-control" placeholder="Comment" rows="10"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-12" data-aos="fade-up">
								<input type="submit" value="Отправить" class="btn btn-warning">
							</div>
						</div>
					</form>
					@else
					<p class="text-danger">Авторизируйтесь чтобы оставлять комментарии...</p>
					@endif

				</section>

			</div>
		</div>
	</main>
	@endsection



