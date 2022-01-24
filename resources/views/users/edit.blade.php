@extends('layouts.main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Users</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Users</a></div>
                <div class="breadcrumb-item">Edit Data Users</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Edit Data Users</h2>
            <div class="container">
                <div class="card">
                    <form method="POST" action="{{ url('users', $users->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control" value="{{ $users->name }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $users->email }}">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control"
                                    value="{{ $users->password }}">
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="text" name="phone" class="form-control" value="{{ $users->phone }}">
                            </div>
                            <div class="form-group">
                                <label>Roles</label>    
                                <select name="roles" class="form-control">
                                    <option>Admin / IT</option>
                                    <option>Operator</option>
                                    <option>Manager</option>
                                </select>

                            </div>
                        </div>
                        <div class="card-footer text-left">
                            <button class="btn btn-primary">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
