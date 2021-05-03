


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<div>Home page</div>


<div class="container">
  <div class="row">

    <div class="col-sm-8">
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



    <div class="col-sm-4">
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