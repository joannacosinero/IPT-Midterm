@extends('landing')

@section('content')

    <div class="row ">
        <div class="col-md-12 offset-md-1">
            <div class="card mt-4 card border-info ">
                <div class="card-header bg-light text-gray" >
                    <h3 class="card-title text-center"style="font-family: Garamond, serif; font-size:40px;" > Registration</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('/register')}}" method="post">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" id="gender" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div> 

                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div> 

                    <p class="text-center">Already register? Log in <a href="{{url('/login')}}">here</a>.</p>
                        <button class="btn btn-block text-white" style="background-color: #FA897B ; width: 100%;">Sign up</button>
                </form>
                </div>
            </div>
        </div>
    </div>


@stop