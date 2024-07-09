@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p class="text-muted">By. <a href="/posts?author={{ $post->author->username }}"
                        class="text-dexoration-none">{{ $post->author->name }}</a> in <a
                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                    {{ $post->created_at->diffForHumans() }}
                </p>
                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" width="1200" class="img-fluid"
                            alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://media.istockphoto.com/id/1981727447/id/foto/it-developers-discussing-online-software-development-information-sellable.jpg?s=1024x1024&w=is&k=20&c=Xbn661CTA1Tyd4db7PqnP9Z2eC26GXP4nWKayarEov0="
                        width="1200" class="img-fluid" alt="{{ $post->category->name }}">
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/posts" class="d-block mt-3">Back To All Posts</a>
            </div>
        </div>
    </div>
@endsection
