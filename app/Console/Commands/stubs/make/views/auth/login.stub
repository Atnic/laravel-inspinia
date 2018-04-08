@extends('inspinia::layouts.auth')

@section('content')
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
      <div><h1 class="logo-name">IN+</h1></div>
      <h3>Welcome to IN+</h3>
      <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
          <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
      </p>
      <p>Login in. To see it in action.</p>
      <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
       {{ csrf_field() }}
       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" placeholder="E-Mail" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
       </div>
       <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
       </div>
       <div class="form-group">
         <div class="checkbox i-checks">
           <label> <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}><i></i> Agree the terms and policy </label>
         </div>
       </div>
       <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

       <a href="{{ route('password.request') }}"><small>Forgot password?</small></a>
       <p class="text-muted text-center"><small>Do not have an account?</small></p>
       <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Create an account</a>
      </form>
      <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; {{ date('Y') }}</small> </p>
    </div>
</div>
@endsection
