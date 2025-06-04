@extends('layouts.user')

@section('content')

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Read the Details</p>
						<h1>Single Article</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

    	<!-- single article section -->
	<div class="mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="single-article-section">
						<div class="single-article-text">
							<div class="single-artcile-bg" style="background-image: url('{{ asset('storage/' . $produk->gambar) }}'); background-size: cover; background-position: center;"></div>
							<p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i>{{ $produk->created_at->format('d F, Y') }}</span>
                            </p>
							<h2>{{ $produk->nama }}</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint soluta, similique quidem fuga vel voluptates amet doloremque corrupti. Perferendis totam voluptates eius error fuga cupiditate dolorum? Adipisci mollitia quod labore aut natus nobis. Rerum perferendis, nobis hic adipisci vel inventore facilis rem illo, tenetur ipsa voluptate dolorem, cupiditate temporibus laudantium quidem recusandae expedita dicta cum eum. Quae laborum repellat a ut, voluptatum ipsa eum. Culpa fugiat minus laborum quia nam!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, praesentium, dicta. Dolorum inventore molestias velit possimus, dolore labore aliquam aperiam architecto quo reprehenderit excepturi ipsum ipsam accusantium nobis ducimus laudantium.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum est aperiam voluptatum id cupiditate quae corporis ex. Molestias modi mollitia neque magni voluptatum, omnis repudiandae aliquam quae veniam error! Eligendi distinctio, ab eius iure atque ducimus id deleniti, vel alias sint similique perspiciatis saepe necessitatibus non eveniet, quo nisi soluta.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt beatae nemo quaerat, doloribus obcaecati odio!</p>
						</div>

						<div class="comments-list-wrap">
                            <h3 class="comment-count-title">
                                {{ $produk->comments->count() }} Comments
                            </h3>

                            <div class="comment-list">
                                @foreach ($produk->comments as $comment)
                                    <div class="single-comment-body">
                                        <div class="comment-user-avater">
                                            <img src="{{ asset('user/assets/img/avaters/avatar1.png') }}" alt="">
                                        </div>
                                        <div class="comment-text-body">
                                            <h4>
                                                {{ $comment->user->name ?? 'User tidak ditemukan' }}
                                                <span class="comment-date">{{ $comment->created_at->format('M d, Y') }}</span>
                                            </h4>
                                            <p>{{ $comment->content }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
						<div class="comment-template">
							<h4>Leave a comment</h4>
							<p>If you have a comment dont feel hesitate to send us your opinion.</p>
                                <form action="{{ route('comments.store', $produk->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                                    <p>
                                        <textarea name="content" id="comment" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    </p>
                                    <p><input type="submit" value="Submit"></p>
                                </form>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="sidebar-section">
						<div class="recent-posts">
							<h4>Recent Posts</h4>
							<ul>
								<li><a href="{{ url('/single-news') }}">You will vainly look for fruit on it in autumn.</a></li>
								<li><a href="{{ url('/single-news') }}">A man's worth has its season, like tomato.</a></li>
								<li><a href="{{ url('/single-news') }}">Good thoughts bear good fresh juicy fruit.</a></li>
								<li><a href="{{ url('/single-news') }}">Fall in love with the fresh orange</a></li>
								<li><a href="{{ url('/single-news') }}">Why the berries always look delecious</a></li>
							</ul>
						</div>
						<div class="archive-posts">
							<h4>Archive Posts</h4>
							<ul>
								<li><a href="{{ url('/single-news') }}">JAN 2019 (5)</a></li>
								<li><a href="{{ url('/single-news') }}">FEB 2019 (3)</a></li>
								<li><a href="{{ url('/single-news') }}">MAY 2019 (4)</a></li>
								<li><a href="{{ url('/single-news') }}">SEP 2019 (4)</a></li>
								<li><a href="{{ url('/single-news') }}">DEC 2019 (3)</a></li>
							</ul>
						</div>
						<div class="tag-section">
							<h4>Tags</h4>
							<ul>
								<li><a href="{{ url('/single-news') }}">Apple</a></li>
								<li><a href="{{ url('/single-news') }}">Strawberry</a></li>
								<li><a href="{{ url('/single-news') }}">BErry</a></li>
								<li><a href="{{ url('/single-news') }}">Orange</a></li>
								<li><a href="{{ url('/single-news') }}">Lemon</a></li>
								<li><a href="{{ url('/single-news') }}">Banana</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single article section -->

@endsection
