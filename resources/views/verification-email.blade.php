<h1>Ipt MIDTERM</h1>

<p>
     Good day, Ma'am/Sir! {{$user->name}}! 
</p>

<p>
    You recieved this email as a result of your registration to our prelim 
    site.Please click on the verification link to verify your account thank you !!!.
</p>

<p>
    <a href="{{url('/verification/' .$user->id . "/" . $user->remember_token)}}">
        Click here to verify
    </a>
</p>