@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Mesin</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Mesin</a></div>
                <div class="breadcrumb-item">Edit Data Mesin</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Edit Data Mesin</h2>
            <div class="container">
                <div class="card">
                    <form method="POST" action="{{ url('machines', $parameters->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Parameter</label>
                                <input name="nama_parameter" value="{{ $parameters->nama_mesin }}" type="text"
                                    placeholder="Nama Parameter." class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Mesin</label>
                                <input name="id_mesin" value="{{ $parameters->type_mesin }}" type="text"
                                    placeholder="ID Mesin" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer text-left">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
