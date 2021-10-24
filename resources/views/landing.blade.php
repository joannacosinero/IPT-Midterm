<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   
    <title>MIDTERM</title>
</head>
<body>
<!--nav-->
<nav class="navbar bg-dark justify-content-between" style="position:sticky;position: -webkit-sticky;top:0;">
  <a class="navbar-brand" href="{{url('/')}}" style="margin-left:20px;font-family:Agency FB;color:#f48ba9;">
    <img  style="-webkit-filter: invert(1);filter: invert(1);" src="https://www.clipartmax.com/png/middle/30-302388_travel-icon-transparent.png" width="30" height="30" class="d-inline align-top" alt="">
       CheapTalk.com
    </a>
  <p class="d-inline" style="margin-right:20px;font-family:Agency FB;color:#f48ba9;">
  <img  style="-webkit-filter: invert(1);filter: invert(1);" src="https://cdn-icons-png.flaticon.com/512/481/481302.png" width="30" height="25" class="d-inline align-top" alt="">
    &nbsp; +63910 - 272 - 943
    </p>
</nav>
<!--bg-->

     <div style="background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0.6) 0%,rgba(0, 0, 0, 0.6) 100%), url(https://wallpaperaccess.com/full/1178479.jpg);background-attachment:fixed; background-repeat: no-repeat; background-position:center;">
                   
            @if (session('errors'))
                <div class="alert alert-danger">
                    <div class="container">
                        Please fix the following errors.
                        <ul>
                            @foreach(session('errors')->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            @if (session('Error'))
                <div class="alert alert-danger">
                    <div class="container">
                        {{session('Error') }}
                    </div>
                </div>
            @endif
            @if (session('Message'))
                <div class="alert alert-success">
                    <div class="container">
                        {{session('Message') }}
                    </div>
                </div>
            @endif
            <br><br>
            <div class="row">
            <div class="col-4 col-md-4 container text-black " style="padding-bottom:250px;padding-top:30px;" >
                @yield('content')
            </div>
            </div>
   <div>
   
</body>
</html>
