
@extends('layouts.app')

@section('content')
    <div class="container text-white">
          <form action="{{ route('comics.store') }}" method="POST">
            @csrf
        
            <div class="mb-3">
              <label class="form-label">Nome</label>
              <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
              <label class="form-label">Descrizione</label>
              <input type="text" class="form-control" name="description">
            </div>
            <div class="mb-3">
              <label class="form-label">Prezzo</label>
              <input type="text" class="form-control" name="price">
            </div>
            <div class="mb-3">
              <label class="form-label">Serie</label>
              <input type="text" class="form-control" name="series">
            </div>
            <div class="mb-3">
              <label class="form-label">Immagine</label>
              <input type="text" class="form-control" name="thumb">
            </div>
            <div class="mb-3">
              <label class="form-label">Data di vendita</label>
              <input type="text" class="form-control" name="sale_date">
            </div>
            <div class="mb-3">
              <label class="form-label">Tipologia</label>
              <input type="text" class="form-control" name="type">
            </div>
        
            <button class="btn btn-primary" type="submit">Salva</button>
          </form>
    </div>

@endsection