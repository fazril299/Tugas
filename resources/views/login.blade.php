@extends('layout.app')

@section('content')
<fieldset class="form-fieldset w-50 d-block mx-auto">
  <legend class="form-label">Login</legend>
  <div class="mb-3">
    <label class="form-label required" for="email">Email</label>
    <input type="email" id="email" name="email" class="form-control" required />
  </div>
  <div class="mb-3">
    <label class="form-label" for="password">Password</label>
    <input type="password" id="password" name="password" class="form-control" required />
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</fieldset>
@endsection
