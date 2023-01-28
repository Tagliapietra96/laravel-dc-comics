<div class="col">
    <div class="card shadow h-100">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">{{$comic->title}}</h5>
          <h6 class="card-title text-muted">{{$comic->series}}</h6>
          <hr class="flex-fill">
          <p class="card-text ">€ {{$comic->price}}</p>
          <a href="{{route("comics.show", $comic->id)}}" class="btn btn-primary">Details</a>
          <a href="{{route("comics.edit", $comic->id)}}" class="btn btn-primary my-3">Edit</a>
          <form action="{{route("comics.destroy", $comic->id)}}" method="POST" class="destroy-btn">
            @csrf()
            @method("delete")
            <button class="btn btn-danger w-100">Delete</button>
          </form>
        </div>
      </div>
</div>