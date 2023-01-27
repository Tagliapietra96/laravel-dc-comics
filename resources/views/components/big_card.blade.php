<div class="col">
    <div class="card shadow h-100">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">{{$comic->title}}</h5>
          <h6 class="card-title text-muted">{{$comic->series}}</h6>
          <hr class="">
          <p class="card-text flex-fill">{{$comic->description}}</p>
          <p class="card-text ">{{$comic->type}}</p>
          <p class="card-text ">{{$comic->sale_date}}</p>
          <p class="card-text ">€ {{$comic->price}}</p>
          <a href="{{route("index")}}" class="btn btn-primary">Back</a>
        </div>
      </div>
</div>