<div class="container">
@foreach($data as $article)
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <p class="card-text">{{$article->preview}}</p>
    <a href="{{route('article', $article->id)}}" class="btn btn-primary">Подробнее</a>
  </div>
</div>
@endforeach
</div>