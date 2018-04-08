@extends('inspinia::layouts.auth')

@section('content')
<div class="middle-box text-center animated fadeInDown">
  <h1>419</h1>
  <h3 class="font-bold">Oops! {{ class_basename($exception->getPrevious() ? : $exception) }}</h3>

  <div class="error-desc">
    {{ $exception->getMessage() ? : 'The page has expired due to inactivity. Please refresh and try again.' : '' }}
    <form class="form-inline m-t" role="form">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-primary">Search</button>
      <a href="{{ route('home') }}" class="btn btn-default">Home</a>
    </form>
  </div>
</div>
@endsection
