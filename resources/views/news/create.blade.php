@extends('layouts.app')

@section('content')
    



<form class="col-sm-6 offset-3 mt-5 " enctype="multipart/form-data" action='/news' method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Headline</label>
    <input type="text" class="form-control" id="headeline" name='headline' placeholder="Headline">
    @error('headline'){{$message}}
        
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">News type</label>
    <select class="form-control" name='type' id="exampleFormControlSelect1">
      <option value="International">International</option>
      <option value="National">National</option>
      <option value="Sports">Sports</option>
      
    </select>
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">description</label>
    <textarea class="form-control" id="" name='description' rows="3"></textarea>

    @error('description'){{$message}}
        
    @enderror
  </div>

  <div class="form-group">
    <label for="">Picture</label>
    <input type="file" name='picture' class="form-control" id="headeline"  placeholder="Headline">
    @error('picture'){{$message}}
        
    @enderror
  </div>

   <br><br>
  <div class="form-group">
    
    <input type="submit" class="form-control btn btn-primary" >
  </div>
</form>

@endsection