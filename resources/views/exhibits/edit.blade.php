@extends('layouts.app')
@section('content')
<div class='container bg-light'>
    <form action="/exhibits/{{$exhibit->id}}" method="POST">
      @method('PUT')
      @csrf
      <div class="form-group">
        <label for="exhibit_name">Edit the title of the exhibit</label>
        <input class="form-control" type='text'name='exhibit_name' id="exhibit_name" value="{{$exhibit->exhibit_name}}" >
      </div>
      <div class="form-group">
        <label for="artist">Edit the name of the Artist</label>
        <input class="form-control" type='text'name='artist' id="artist" value="{{$exhibit->artist}}">
      </div>
      <div class="form-group">
        <label for="year">Edit the year that the exhibit was created</label>
        <input class="form-control" type='text'name='year' id="year" value="{{$exhibit->year}}" >
      </div>
      <div class="form-group">
        <label for="image_URL">Edit the image address</label>
        <input type="url" class="form-control" name='image_URL' id="exampleofaurl" placeholder="https://..."value="{{$exhibit->image_URL}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Edit the description</label>
        <textarea class="form-control" id="description" name='description'rows="7">{{$exhibit->description}}</textarea>
      </div>
       <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@endsection
