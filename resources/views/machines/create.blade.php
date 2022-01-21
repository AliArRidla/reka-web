@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Mesin</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Mesin</a></div>
                <div class="breadcrumb-item">Tambah Data Mesin</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Tambah Data Mesin</h2>
            <div class="container">
                <div class="card">
                    <form method="POST" action="{{ url('machines') }}">
                        @csrf
                        <div class="card-body">
                            {{-- <div class="form-group">
                                            <label>ID Mesin</label>
                                            <input type="number" class="form-control" required="">
                                        </div> --}}
                            <div class="form-group">
                                <label>Nama Mesin</label>
                                <input type="text" name="nama_mesin" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Type Mesin</label>
                                <input type="text" name="type_mesin" class="form-control" required>
                            </div>
                        </div>
                        <div class="card-footer text-left">
                            <button class="btn btn-primary" type="submit">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
