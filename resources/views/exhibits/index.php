@extends('layouts.app')
@section('content')
  <h1 class='text-center text-white-50'>Images of The Stars</h1>
  @foreach ($exhibits as $exhibit)
  <div class="card">
  <img class="card-img-top" src="{{$exhibit->image_URL}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$exhibit->name}}</h5>
    <p class="card-text">Artist:{{$exhibit->artist}} Created on:{{$exhibit->year}}</p>
    <p class="card-text">{{$exhibit->description}}</p>
  </div>
  <div class="card-footer">
    <small class="text-muted">Posted by {{$exhibit->user->name}} on {{$exhibit->updated_at}}.</small>
  </div>
</div>
  @endforeach
@endsection
