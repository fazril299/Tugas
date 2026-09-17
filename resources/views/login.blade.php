@extends('layout.app')

@section('content')
<form method="POST" action="{{ route('login.store') }}">
  @csrf
  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif
  @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
  @endif
  <fieldset class="form-fieldset w-50 d-block mx-auto">
    <legend class="form-label">Login</legend>
    <div class="mb-3">
      <label class="form-label required" for="email">Email</label>
      <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" autocomplete="email" required value="{{ old('email') }}" />
      @error('email')
          <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    <div class="mb-3">
      <label class="form-label" for="password">Password</label>
      <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" required />
      @error('password')
          <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </fieldset>
</form>
@endsection