@extends('template')

@section('title', 'Region')

@section('content')
    <div class="container">
        <h1 class="p-md-3">Teyvat</h1>
        @foreach ($post_region as $post)
                <div class="card mb-3">
                    <img src={{ $post->region_image }} class="card-img-top" alt="region_image">
                    <div class="card-body"  style="border: 3px solid black">
                        <h5 class="card-title fs-1 text-center"  style="border-bottom: 1.5px solid black">{{ $post->region_name }}</h5>
                        <p class="card-text fs-3">{{ $post->region_description }}</p>
                    </div>
                </div>
        @endforeach
    </div>
@endsection
