<x-app-layout>

    @section('content')
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <h2>Edit Penyewa</h2>
                <a class="btn btn-primary" href="{{ route('penyewa.index') }}">Kembali</a>
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
                        <h5 class="card-title">Form Edit Penyewa</h5>
    
                        <!-- Vertical Form -->
                        <form action="{{ route('penyewa.update', $penyewa->id_penyewa) }}" method="POST" class="row g-3">
                            @csrf
                            @method('PUT')
    
                            <div class="col-12">
                                <label for="nama_penyewa" class="form-label"><strong>Nama Penyewa:</strong></label>
                                <input type="text" name="nama_penyewa" value="{{ old('nama_penyewa', $penyewa->nama_penyewa) }}" class="form-control" id="nama_penyewa" placeholder="Nama Penyewa" required>
                            </div>
                            <div class="col-12">
                                <label for="alamat" class="form-label"><strong>Alamat:</strong></label>
                                <textarea class="form-control" id="alamat" name="alamat" style="height:150px" placeholder="Alamat" required>{{ old('alamat', $penyewa->alamat) }}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="no_hp" class="form-label"><strong>No HP:</strong></label>
                                <input type="text" name="no_hp" value="{{ old('no_hp', $penyewa->no_hp) }}" class="form-control" id="no_hp" placeholder="No HP" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
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
    
        .form-control {
            border-radius: 0.375rem;
            border: 1px solid #ced4da;
            padding: 0.5rem 0.75rem;
        }
    
        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(66, 153, 225, 0.5);
            border-color: #4f46e5;
        }
    
        .text-center {
            text-align: center;
        }
    
        .row {
            margin-bottom: 1rem;
        }
    </style>
    
    
    </x-app-layout>
    