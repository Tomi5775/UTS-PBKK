<x-app-layout>

    @section('content')
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <h2>Tambah Invoice</h2>
                <a class="btn btn-back" href="{{ route('invoice.index') }}">Kembali</a>
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
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Tambah Invoice</h5>
    
                        <!-- Vertical Form -->
                        <form action="{{ route('invoice.store') }}" method="POST" class="row g-3">
                            @csrf
    
                            <div class="col-12">
                                <label for="id_kwitansi" class="form-label"><strong>ID Kwitansi:</strong></label>
                                <select name="id_kwitansi" class="form-control" id="id_kwitansi">
                                    <option value="">Pilih ID Kwitansi</option>
                                    @foreach ($kwitansis as $kwitansi)
                                        <option value="{{ $kwitansi->id_kwitansi }}">{{ $kwitansi->id_kwitansi }}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="col-12">
                                <label for="id_penyewa" class="form-label"><strong>Nama Penyewa:</strong></label>
                                <select name="id_penyewa" class="form-control" id="id_penyewa">
                                    <option value="">Pilih Nama Penyewa</option>
                                    @foreach ($penyewas as $penyewa)
                                        <option value="{{ $penyewa->id_penyewa }}">{{ $penyewa->nama_penyewa }}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="col-12">
                                <label for="no_pol" class="form-label"><strong>No Polisi:</strong></label>
                                <select name="no_pol" class="form-control" id="no_pol">
                                    <option value="">Pilih No Polisi</option>
                                    @foreach ($kendaraans as $kendaraan)
                                        <option value="{{ $kendaraan->no_pol }}">{{ $kendaraan->no_pol }}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                        <!-- End Vertical Form -->
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .container {
            max-width: 900px;
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
    
        .btn-primary {
            background-color: #4f46e5;
            border-color: #4f46e5;
            color: white;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
        }
    
        .btn-primary:hover {
            background-color: #4338ca;
            border-color: #4338ca;
        }
    
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            color: white;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
        }
    
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    
        .form-control {
            border-radius: 0.375rem;
            border: 1px solid #d1d5db;
            padding: 0.75rem 1rem;
            font-size: 1rem;
        }
    
        .form-label {
            font-weight: bold;
        }
    
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 1rem;
            border-radius: 0.375rem;
            margin-bottom: 1.5rem;
        }
    
        .text-center {
            text-align: center;
        }
    
        .btn-back {
            background-color: #6c757d;
            border-color: #6c757d;
            color: white;
            padding: 0.375rem 0.75rem;
            border-radius: 0.375rem;
            text-decoration: none;
        }
    
        .btn-back:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    
        .alert-danger ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
    
        .alert-danger ul li {
            margin-bottom: 0.5rem;
        }
    </style>
    
    </x-app-layout>
    