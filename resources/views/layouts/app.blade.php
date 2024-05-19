<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kendaraan Management')</title>
    <!-- Link to your custom CSS file -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .navbar-custom {
            background: linear-gradient(45deg, #1a1a1d, #4e4e50);
            border-bottom: 2px solid #f8f9fa;
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #f8f9fa;
        }
        .navbar-custom .nav-link:hover {
            color: #d4af37;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
            <a class="navbar-brand" href="{{ route('kendaraan.index') }}">Kendaraan Management</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kendaraan.index') }}">Kendaraan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kwitansi.index') }}">Kwitansi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('penyewa.index') }}">Penyewa</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Content Section -->
        <div class="content mt-3 shadow-sm">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @yield('content')
        </div>
    </div>

    <!-- JavaScript dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
