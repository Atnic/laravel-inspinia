@extends('inspinia::layouts.auth')

@section('content')
<div class="passwordBox animated fadeInDown">
  <div class="row">
    <div class="col-md-12">
      <div class="ibox-content">
        <h2 class="font-bold">Forgot password</h2>
        <p>Enter your email address and your password will be reset and emailed to you.</p>
        <div class="row">
          <div class="col-lg-12">
            <form class="m-t" role="form" method="POST" action="{{ route('password.email') }}">
              {{ csrf_field() }}
              <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary block full-width m-b">Send new password</button>
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
