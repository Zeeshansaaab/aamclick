@extends($activeTemplate . 'layouts.front')
@push('styles')
<style>
  :root{
    --primary: #F1A619;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body
{
    background-color: #F0F2F5;
}
form{
    width: 30%;
    margin: auto;
    margin-bottom: 20vh;
    margin-top: 20vh;
    background-color: var(--primary);
    border-radius: 5px;
    padding: 10px;
    box-shadow:10px 10px black;
    
}
.form-control:focus{
    box-shadow: none;
}
h3{
    color: black;
    font-weight: bold;
    font-family:Arial, Helvetica, sans-serif;
    
}
input{
    background: transparent!important;
    border: 1px solid black!important;
    color:black!important;
      
}
label{
    color: black;
}
.btn{
    background-color: black;
    color: var(--primary);
    border-color: black;
    font-weight:900;
}
.btn:hover{
    background-color: var(--primary);
    color: black;
    border-color: var(--primary);
}
.rounded-pil{
    border-radius: 35px;
}
label{
    font-weight:900;
}
.form-check-input{
    margin-left: 0%;
}
 
@media only screen and (max-width: 600px) {
    form{
        width: 90%;
        margin-top: 20vh;
        margin-bottom: 20vh;
        
    }
    
}
  </style>
@endpush
@section('content')
@php
    $loginCaption = getContent('login.content',true);
@endphp
<div class="container-fluid overflow-hidden">  
  <form action="{{ route('user.login') }}" method="post">
    @csrf
      <h3 class="text-center">Login</h3>
      <div class="justify-content-center">
          <div class="form-group px-3">
          <label>Email</label>
          <input type="email"  name="email"  class="form-control" required>
          </div>
          <div class="form-group px-3">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
          </div>
          <x-captcha></x-captcha>
          <input class="form-check-input w-auto p-2" type="checkbox" name="remember" id="remember"
          {{ old('remember') ? 'checked' : '' }}>
      
          <div class="form-group form-check ">
          <input type="checkbox" class="form-check-input" type="checkbox" name="remember" id="remember"
          {{ old('remember') ? 'checked' : '' }}>
          <label class="form-check-label" for="remember">@lang('Remember Me')</label>
          <a class="float-right" style="color:black; font-weight: bold;" href="{{ route('user.password.request') }}">@lang('Forgot password')</a>
          </div>
           <!-- <div class="float-right"style="margin-top: -30px;">
              
          </div> --> 
          <button type="submit" class="btn btn-primary float-right rounded-pil py-2 px-5">Login</button>
      </div>
  </form>
</div>
@endsection
