@extends('inspinia::layouts.auth')

@section('content')
<div class="passwordBox animated fadeInDown">
  <div class="row">
    <div class="col-md-12">
      <div class="ibox-content">
        <h2 class="font-bold">Reset Password</h2>
        {{-- <p>Enter your email address and your password will be reset and emailed to you.</p> --}}
        <div class="row">
          <div class="col-lg-12">
            <form class="m-t" role="form" method="POST" action="{{ route('password.request') }}">
              {{ csrf_field() }}
              <input type="hidden" name="token" value="{{ $token }}">
              <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="Email address" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary block full-width m-b">Reset password</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr/>
  <div class="row">
    <div class="col-md-6">
        Copyright Example Company
    </div>
    <div class="col-md-6 text-right">
       <small>© {{  DATE('Y') }}</small>
    </div>
  </div>
</div>
@endsection
