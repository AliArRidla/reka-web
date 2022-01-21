@extends('layouts.main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Users</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">User</a></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Daftar User</h2>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered-2">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No. Telp</th>
                                    <th>Roles</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp

                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</ptd>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->roles }}</td>
                                        <td> <form method="POST" action="{{ url('users', $item->id) }}">
                                            <a href="{{ route('users.edit', $item->id) }}"
                                                class="btn btn-icon btn-primary"><i
                                                    class="far fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                    <button class="btn btn-icon btn-danger"><i class="far fa-edit"></i></button>
                                    
                                    </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
