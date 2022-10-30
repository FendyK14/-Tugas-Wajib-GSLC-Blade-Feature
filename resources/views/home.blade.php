@extends('template')

@section('title', 'Home')

@section('content')
<div class="container">
    <h1 class="p-md-2 text-center"
        style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 50px; border-bottom: 1.5px solid black">
        Character</h1>

    <div class="row p-md-6">
        @foreach ($post_character as $post)
            <div class="col-md-4 p-3" style="display: flex; flex-wrap: wrap">
                <div class="card" style="border: 1px solid black; ">
                    <img src={{ $post->character_image }} class="card-img-top" alt="character_image">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="border-top: 1px solid black;">
                            {{ $post->character_name }}</h5>
                        <p class="card-text">{{ $post->background }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Weapon : {{ $post->weapon }}</li>
                        <li class="list-group-item">Region : {{ $post->region }}</li>
                        <li class="list-group-item">Vision : {{ $post->vision }}</li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
