@extends('layouts.main')

@section('content')
<h1 class="mb-5 text-center">Post Categories</h1>

    <div class="container">
        <div class="row d-flex justify-content-center">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-3">
                    <a href="/posts?category={{ $category->slug }}">
                    <div class="card">
                        <img src="https://media.istockphoto.com/id/1981727447/id/foto/it-developers-discussing-online-software-development-information-sellable.jpg?s=1024x1024&w=is&k=20&c=Xbn661CTA1Tyd4db7PqnP9Z2eC26GXP4nWKayarEov0="
                            width="500" class="card-img-top" alt="Category">
                        <div class="card-img-overlay d-flex align-items-center">
                            <h5 class="card-title text-center flex-fill p-0 fs-3 text-white" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
