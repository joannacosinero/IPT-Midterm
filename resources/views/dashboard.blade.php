@extends('base')
@include('navbar')
@section('content')
  <div class="container">

    <div class="mb-1 float-end">
      <a href="{{url('/createnewpost')}}" class="btn btn-light p-3">
        Create New Post
      </a>
    </div>
    <h1 class="headertxt">Recent Post</h1>
    <hr>
    <div class="card-body">
          @foreach($posts as $post)
          @if ($post->user->gender == 'Male')
                <div title="male" class="card m-1 mb-3 pb-3 pt-3" style="background-color: lightblue; ">
           @else
                <div class="card m-1 mb-3 pb-3 pt-3" style="background-color: lightpink; ">
           @endif
      <div class="card-body">
        <div class="dropdown float-end">
          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-list"></i> {{$post->category->category}}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

            @foreach(App\Models\User::whereHas('posts', function($query) use ($post){
                $query->where('category_id', $post->category_id);
            })->get() as $user)
            <li><a class="dropdown-item" href="/authors/{{$user->id}}">{{$user->name}}</a></li>
            @endforeach

          </ul>
        </div>
        <p class="card-title">
          <i class="fas fa-user"></i> {{$post->user->name}}
        </p>
        <p class="card-text  text-dark p-3" style="border-radius: 10px;">
          {{$post->post}}
        </p>
      </div>
    </div>
    @endforeach
  </div> 
  

@endsection