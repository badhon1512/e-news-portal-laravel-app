<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<div>news page</div>

<div class="card" style="width: 100%;">

 
  <div class="card-body">
    <img height="100px" src="https://resize.indiatvnews.com/en/resize/newbucket/1200_-/2020/09/breaking-news-1600049368.jpg" alt="pic">
    <h5 class="card-title">{{$item->headline}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$item->type}} <span>{{$item->created_at}} </span></h6>
    <p class="card-text">{{$item->description}}</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>