@extends('layout.app')

@section('content')
    <main class="admin-content">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="fs-1 fw-normal mb-3">Admin Dashboard</h1>
        <p class="fs-3">Welcome, {{ auth()->user()->name }}!</p>
    </main>
@endsection
