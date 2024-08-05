<x-app-layout>

    @section('content')
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <h2>Tambah Kwitansi</h2>
                <a class="btn btn-primary" href="{{ route('kwitansi.index') }}">Kembali</a>
            </div>
        </div>
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Kwitansi</h5>
    
                        <!-- Vertical Form -->
                        <form action="{{ route('kwitansi.store') }}" method="POST" class="row g-3">
                            @csrf
                            
                            <div class="col-12">
                                <label for="tgl_transaksi" class="form-label"><strong>Tanggal Transaksi:</strong></label>
                                <input type="date" name="tgl_transaksi" class="form-control" id="tgl_transaksi" placeholder="Tanggal Transaksi" required>
                            </div>
    
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                        <!-- Vertical Form -->
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
    
        .card {
            border-radius: 0.375rem;
            box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
        }
    
        .card-body {
            padding: 2rem;
        }
    
        .btn-primary, .btn-secondary {
            border-radius: 0.375rem;
            padding: 0.5rem 1rem;
            font-size: 1rem;
        }
    
        .btn-primary {
            background-color: #4f46e5;
            border-color: #4f46e5;
            color: white;
        }
    
        .btn-primary:hover {
            background-color: #4338ca;
            border-color: #4338ca;
        }
    
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            color: white;
        }
    
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 1rem;
            border-radius: 0.375rem;
            margin-bottom: 1.5rem;
        }
    
        .form-label {
            font-weight: 500;
        }
    
        .text-center {
            text-align: center;
        }
    </style>
    
    
    </x-app-layout>
    