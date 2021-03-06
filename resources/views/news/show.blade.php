@extends('layouts.app')


@section('content')
    


<div class="card" style="width: 100%;">

 
  <div class="card-body">
    <img style="height:100px" src="https://resize.indiatvnews.com/en/resize/newbucket/1200_-/2020/09/breaking-news-1600049368.jpg" alt="pic">
    <h5 class="card-title">{{$item->headline}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$item->type}} <span>{{$item->created_at}} </span></h6>
    <p class="card-text">{{$item->description}}</p>


    <br><br><br>

    

    @if (Auth::check())
<div class="row container">

  <div class="col-sm-3">
    
    
    <a class="btn btn-warning" href="/news/{{$item->id}}/edit" class="card-link">Update</a>
  </div>

 

    <div class="col-sm-3">
        
    
    <form action="/news/{{$item->id}}" method="POST">

      @csrf
      {{method_field('DELETE')}}

      <button type="submit" class="btn btn-danger">Delete</button>

    </form>
  </div>
   
  </div>

  @endif
    
  </div>
</div>

@endsection