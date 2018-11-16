@extends('layouts.app')
@section('content')
<div class='container bg-primary text-warning'>
    <form action="/exhibits" method="POST">
      {{csrf_field()}}
      <div class="form-group">
        <label for="exhibit_name">Add the title of the exhibit</label>
        <input class="form-control" type='text'name='exhibit_name' id="exhibit_name" >
      </div>
      <div class="form-group">
        <label for="artist">Add the name of the Artist</label>
        <input class="form-control" type='text'name='artist' id="artist" >
      </div>
      <div class="form-group">
        <label for="year">Add the year that the exhibit was created</label>
        <input class="form-control" type='text'name='year' id="year" >
      </div>
      <div class="form-group">
        <label for="image_URL">Add the image address</label>
        <input type="url" class="form-control" name='image_URL' id="exampleofaurl" placeholder="https://...">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Write a description</label>
        <textarea class="form-control" id="description" name='description'rows="7"></textarea>
      </div>
       <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@endsection
