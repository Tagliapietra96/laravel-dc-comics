@extends('layouts.app')
@section("content")
    <main class="container py-5">
        <h1 class="py-5 text-center text-white">Comics Gallery</h1>
        <div class="text-center mb-5">
            <a href="{{route("comics.create")}}" class="btn btn-primary ">Nuovo</a>
        </div>
        
        <div class="row row-cols-4 g-5">
            @foreach($comics as $comic)
                @include("components.card_comic", compact("comic"))
            @endforeach
        </div>
    </main>
@endsection