@extends('layouts.app')
@section('content')
<div class='container card-group flex-column col-md-9'>
  <h1 class='text-center text-warning'>Images of The Stars</h1>
  @foreach ($exhibits as $exhibit)
  <div class="card mt-3 mb-3">
    <img class="card-img-top" src="{{$exhibit->image_URL}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$exhibit->exhibit_name}}</h5>
      <p class="card-text">Artist:{{$exhibit->artist}} Created on:{{$exhibit->year}}</p>
      <p class="card-text">{{$exhibit->description}}</p>
    </div>
    <div class="card-footer bg-dark">
      <small class="text-muted">Posted by {{$exhibit->user->name}} on {{$exhibit->updated_at}}.</small>
        <div class="float-right row">
            <button type='submit' class="btn btn-dark"><a href="/exhibits/{{$exhibit->id}}/edit"><i class="fas fa-user-edit text-primary"></i></a></button>
            <form action="{{url('/exhibits',$exhibit->id)}}" method='POST'>
                        @csrf
                        {{ method_field('DELETE') }}
                      <button type="submit"class="btn btn-dark"><i class="fas fa-user-minus text-primary"></i></button>

            </form>
      </div>
    </div>
  </div>
  @endforeach
  <button type="submit" class="text-center btn btn-primary">
    <a class="text-warning"href="/exhibits/create"><h2>Add An Exhibit</h2></a>
  </button>
</div>
@endsection
