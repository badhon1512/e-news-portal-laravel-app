@include('layouts.navbar')

<div class="card" style="width: 100%;">

 
  <div class="card-body">
    <img height="100px" src="https://resize.indiatvnews.com/en/resize/newbucket/1200_-/2020/09/breaking-news-1600049368.jpg" alt="pic">
    <h5 class="card-title">{{$item->headline}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$item->type}} <span>{{$item->created_at}} </span></h6>
    <p class="card-text">{{$item->description}}</p>
    <a href="#" class="card-link">Update</a>

    <form action="/news/{{$item->id}}" method="POST">

      @csrf
      {{method_field('DELETE')}}

      <button type="submit">Delete</button>

    </form>
    
  </div>
</div>