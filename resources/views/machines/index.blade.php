@extends('layouts.main')

@section('content')
    {{--  <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>

            @include('partials.navbar')
            @include('partials.sidebar')

            <!-- Main Content -->  --}}
            {{--  <div class="main-content">  --}}
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
                                                    <td><a href="{{ route('machines.edit', $machines->id) }}"
                                                            class="btn btn-icon btn-primary"><i
                                                                class="far fa-edit"></i></a>
                                                        <form method="POST" action="{{ url('machines', $machines->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                    <td style="width: 100px"><button class="btn-red">Hapus</button>
                                                    </td>
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
            {{--  </div>  --}}
        {{--  </div>
    </div>  --}}
@endsection
