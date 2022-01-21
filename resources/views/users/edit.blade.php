<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Tambah User</title>
    <link rel="icon" href="../assets/img/reka-logo.png">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>

            @include('partials.navbar')
            @include('partials.sidebar')

            <!-- Main Content -->
            <div class="main-content">
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
                                            <input type="password" name="password" class="form-control" value="{{ $users->password }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Telepon</label>
                                            <input type="text" name="phone" class="form-control" value="{{ $users->phone }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Roles</label>
                                            <select name="roles" class="form-control" al >
                                                <option>Admin</option>
                                                <option>Operator</option>
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
            </div>
            </section>
        </div>
    </div>


    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>
