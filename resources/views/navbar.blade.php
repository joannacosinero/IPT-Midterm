@extends('base')


@section('content')

<nav class="navbar navbar-expand-lg bg-gradient text-uppercase fixed-top font-weight-100" id="mainNav">
        <div class="container">
            <a class="text-white navbar-brand" href="/"><i class="fas fa-headset"></i> CheapTalk</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto ">                      
                  <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-4 px-0 px-lg-4 rounded" href="/">HOME</a></li>
                    @if (!Auth::check())

                   @else
                   <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-4 px-0 px-lg-4 rounded" href="/dashboard">DASHBOARD</a></li>
                   <li class="nav-item mx-0 mx-lg-1 dropdown">
                        <a class="nav-link dropdown-toggle text-white nav-link py-4 px-0 px-lg-4 rounded" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-list-alt"></i> Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach(App\Models\Category::get() as $category)
                            <li>
                                <a class="dropdown-item" href="/categories/{{$category->id}}">{{$category->category}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-4 px-0 px-lg-4 rounded" href="/authors"><i class="fas fa-users"></i> USERS</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-4 px-0 px-lg-4 rounded" href="/logout"><i class="fas fa-sign-out"></i> LOG OUT</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>