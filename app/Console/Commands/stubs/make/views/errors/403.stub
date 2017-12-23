@extends('inspinia::layouts.auth')

@section('content')
<div class="middle-box text-center animated fadeInDown">
  <h1>403</h1>
  <h3 class="font-bold">Oops! {{ class_basename($exception->getPrevious() ? : $exception) }}</h3>

  <div class="error-desc">
      {{ $exception->getPrevious() ? $exception->getPrevious()->getMessage() : $exception->getMessage() }}
      <form class="form-inline m-t" role="form">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search for page">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
  </div>
</div>
@endsection
