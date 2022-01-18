@extends('layouts.app')

  
@section('content')
 
  
        
    <div class="card-body">
      <a href="/admin" type="button" class="btn btn-primary">Create event</a>
    </div>
            
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2 justify-content-center align-self-center">
      @foreach ($data as $event )
      <div class="card m-5"  style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('storage').'/'.$event->image }}" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $event->title }}</h5>
            <p class="card-text">{{ $event->description }}</p>
            <p class="card-text">{{ $event->date }}</p>
            <p class="card-text">{{ $event->maxparticipants }}</p>
            
                <div class="container-btn">
                <form action="/indexAdmin/ {{$event->id}}" method="POST">
                  @method('DELETE')
                  @csrf
                    <div class="container-btn">
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
                <br>
                <form action='{{route('events.edit', $event->id)}}' method="GET">
                  <button type="submit" class="btn btn-success">Edit</button>
                </form>
              </div>
        </div>
      </div>
      @endforeach
    </div>
@endsection


      
  

