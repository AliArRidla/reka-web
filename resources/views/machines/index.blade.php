@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Mesin</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Mesin</a></div>
                <div class="breadcrumb-item">Daftar Mesin</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">List Mesin</h2>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered-2">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">ID Mesin</th>
                                    <th scope="col">Nama Mesin</th>
                                    <th scope="col">Type Mesin</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($machines as $machines)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $machines->id }}</td>
                                        <td>{{ $machines->nama_mesin }}</td>
                                        <td>{{ $machines->type_mesin }}</td>
                                        <td>
                                            <form method="POST" action="{{ url('machines', $machines->id) }}">
                                                <a href="{{ route('machines.edit', $machines->id) }}"
                                                    class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-icon btn-danger"><i class="fas fa-times"></i></button>
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
        </div>
    </section>
@endsection
