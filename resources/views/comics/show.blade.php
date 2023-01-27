@extends('layouts.app')
@section("content")
    <main class="container">
        <div class="row row-cols-1 ">
            @include("components.big_card", compact("comic"))
        </div>
    </main>
@endsection