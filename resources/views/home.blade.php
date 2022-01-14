@extends('layouts.main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            
            {{ __('You are logged in!') }}
        </div>
        <div class="container">
            <h2>Ini halaman setelah login</h2>
        </div>
    </section>
@endsection
