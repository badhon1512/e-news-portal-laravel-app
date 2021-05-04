
@extends('layouts.app')

@section('content')
    

 




<div class="container">
  @if (session('delete'))

  <h4>{{session('delete')}}</h4>
    
@endif


@if (session('update'))

  <h4 class="success">{{session('update')}}</h4>
    
@endif
  <div class="row">

    <div class="col-sm-9">
      <ul class="list-group">

        @foreach ($news as $item)
            
        
        <li class="list-group-item col-sm-8">
          <a href="news/{{$item->id}}">
            <div>
              <h5>{{$item->headline}}</h5>
               <p>{{$item->created_at}}</p>
          </div>
          </a>
        </li>

        @endforeach
        
        
      </ul>
    </div>



    <div class="col-sm-3">
      <ul class="list-group">

        
            
        
        <li class="list-group-item d-inline">
          <a href="/news/">
            <div>
              <h5>Add </h5>
               <p>Addd pic</p>
          </div>
          </a>
        </li>

        
        
        
      </ul>
    </div>

  </div>




</div>

@endsection