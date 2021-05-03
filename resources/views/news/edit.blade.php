@include('layouts.navbar')


<form class="col-sm-6 offset-3 mt-5 "  action='/news/{{$news->id}}' method="POST">
  @csrf
  {{method_field('PUT')}}
  <div class="form-group">
    <label for="exampleFormControlInput1">Headline</label>
    <input type="text" class="form-control" id="headeline" name='headline' placeholder="Headline" value="{{$news->headline}}">
    @error('headline'){{$message}}
        
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">News type</label>
    <select class="form-control"  name='type' id="exampleFormControlSelect1">
      <option value="International" @if ($news->type=="International")
          
        select
      @endif>
      International</option>
      <option @if ($news->type=="National")
          
        select
      @endif value="National">National</option>
      <option @if ($news->type=="Sports")
          
        select
      @endif value="Sports">Sports</option>
      
    </select>
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">description</label>
    <textarea class="form-control"  id="" name='description' rows="3">{{$news->description}}</textarea>

    @error('description'){{$message}}
        
    @enderror
  </div>

  
   <br><br>
  <div class="form-group">
    
    <input type="submit" class="form-control btn btn-primary" >
  </div>
</form>


