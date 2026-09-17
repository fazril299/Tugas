@extends('layout.app')

@section('content')
<form method="POST" action="{{ route('register.store') }}">
  @csrf
  {{-- Fieldset mengelompokkan seluruh input pendaftaran dalam satu bagian. --}}
  <fieldset class="form-fieldset w-50 d-block mx-auto">
    {{-- Legend menjadi judul dari kelompok input di dalam fieldset. --}}
    <legend class="form-label">Register</legend>
    <div class="mb-3">
      <label class="form-label required" for="name">Nama Lengkap</label>
      <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" autocomplete="name" required value="{{ old('name') }}" />
      @error('name')
          <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
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
    <button type="submit" class="btn btn-primary">Kirim</button>
  </fieldset>
</form>
@endsection