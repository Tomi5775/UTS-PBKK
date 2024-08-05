<x-app-layout>

    @section('content')
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <h2>Tambah Kendaraan</h2>
                <a class="btn btn-back" href="{{ route('kendaraan.index') }}">Kembali</a>
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
                        <h5 class="card-title">Form Tambah Kendaraan</h5>
    
                        <!-- Vertical Form -->
                        <form action="{{ route('kendaraan.store') }}" method="POST" class="row g-3">
                            @csrf
    
                            <div class="col-12">
                                <label for="no_pol" class="form-label"><strong>No Polisi:</strong></label>
                                <input type="text" name="no_pol" class="form-control" id="no_pol" placeholder="No Polisi" value="{{ old('no_pol') }}">
                            </div>
                            <div class="col-12">
                                <label for="no_mesin" class="form-label"><strong>No Mesin:</strong></label>
                                <input type="text" name="no_mesin" class="form-control" id="no_mesin" placeholder="No Mesin" value="{{ old('no_mesin') }}">
                            </div>
                            <div class="col-12">
                                <label for="jenis_mobil" class="form-label"><strong>Jenis Mobil:</strong></label>
                                <select name="jenis_mobil" class="form-control" id="jenis_mobil">
                                    <option value="mpv" {{ old('jenis_mobil') == 'mpv' ? 'selected' : '' }}>MPV</option>
                                    <option value="city" {{ old('jenis_mobil') == 'city' ? 'selected' : '' }}>City</option>
                                    <option value="suv" {{ old('jenis_mobil') == 'suv' ? 'selected' : '' }}>SUV</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="nama_mobil" class="form-label"><strong>Nama Mobil:</strong></label>
                                <input type="text" name="nama_mobil" class="form-control" id="nama_mobil" placeholder="Nama Mobil" value="{{ old('nama_mobil') }}">
                            </div>
                            <div class="col-12">
                                <label for="merek" class="form-label"><strong>Merek:</strong></label>
                                <select name="merek" class="form-control" id="merek">
                                    <option value="honda" {{ old('merek') == 'honda' ? 'selected' : '' }}>Honda</option>
                                    <option value="toyota" {{ old('merek') == 'toyota' ? 'selected' : '' }}>Toyota</option>
                                    <option value="daihatsu" {{ old('merek') == 'daihatsu' ? 'selected' : '' }}>Daihatsu</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="kapasitas" class="form-label"><strong>Kapasitas:</strong></label>
                                <input type="text" name="kapasitas" class="form-control" id="kapasitas" placeholder="Kapasitas" value="{{ old('kapasitas') }}">
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
    