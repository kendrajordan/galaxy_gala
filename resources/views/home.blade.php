@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-warning">Dashboard</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                      <a class="text-warning"href="/exhibits"><h2>View Exhibits</h2></a>


                      <a class="text-warning"href="/exhibits/create"><h2>Add An Exhibit</h2></a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
