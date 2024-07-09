@extends('dashboard.layouts.main')
@section('content')
    <div class="container">
        <div class="container">
            <div class="row my-3">
                <div class="col-lg-9">
                    <h1 class="mb-3">{{ $post->title }}</h1>
                    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my
                        posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span
                            data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                                data-feather="x-circle"></span> Delete</button>
                    </form>
                    @if ($post->image)
                        <div style="max-height: 350px; overflow:hidden;">
                            <img src="{{ asset('storage/' . $post->image) }}" width="1200" class="img-fluid mt-3"
                                alt="{{ $post->category->name }}">
                        </div>
                    @else
                        <img src="https://media.istockphoto.com/id/1981727447/id/foto/it-developers-discussing-online-software-development-information-sellable.jpg?s=1024x1024&w=is&k=20&c=Xbn661CTA1Tyd4db7PqnP9Z2eC26GXP4nWKayarEov0="
                            width="1200" class="img-fluid mt-3" alt="{{ $post->category->name }}">
                    @endif
                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
