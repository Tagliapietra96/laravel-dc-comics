
@extends('layouts.app')

@section('content')
    <div class="container text-white">
          <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method("put")

            <div class="mb-3">
              <label class="form-label">Nome</label>
              <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
              <label class="form-label">Prezzo</label>
              <input type="text" class="form-control" name="price">
            </div>
        
            <button class="btn btn-primary" type="submit">Salva</button>
          </form>
    </div>

@endsection