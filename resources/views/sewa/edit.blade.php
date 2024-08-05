<x-app-layout>
    @section('content')
    <div class="container mt-5 bg-light p-5 rounded shadow-sm">
        <div class="row mb-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <h2 class="text-primary">Edit Sewa</h2>
                <a class="btn btn-outline-primary" href="{{ route('sewa.index') }}">Kembali</a>
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
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-gradient-primary text-white">
                        <h5 class="card-title mb-0">Form Edit Sewa</h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('sewa.update', $sewa->id_sewa) }}" method="POST" class="row g-3">
                            @csrf
                            @method('PUT')
    
                            <div class="col-12">
                                <label for="no_pol" class="form-label"><strong>No Polisi:</strong></label>
                                <select name="no_pol" class="form-select" id="no_pol">
                                    <option value="">Pilih No Polisi</option>
                                    @foreach ($kendaraans as $kendaraan)
                                        <option value="{{ $kendaraan->no_pol }}" @if ($kendaraan->no_pol == $sewa->no_pol) selected @endif>{{ $kendaraan->no_pol }}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="col-12">
                                <label for="id_penyewa" class="form-label"><strong>Nama Penyewa:</strong></label>
                                <select name="id_penyewa" class="form-select" id="id_penyewa">
                                    <option value="">Pilih Nama Penyewa</option>
                                    @foreach ($penyewas as $penyewa)
                                        <option value="{{ $penyewa->id_penyewa }}" @if ($penyewa->id_penyewa == $sewa->id_penyewa) selected @endif>{{ $penyewa->nama_penyewa }}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="col-12">
                                <label for="id_kwitansi" class="form-label"><strong>ID Kwitansi:</strong></label>
                                <select name="id_kwitansi" class="form-select" id="id_kwitansi">
                                    <option value="">Pilih ID Kwitansi</option>
                                    @foreach ($kwitansis as $kwitansi)
                                        <option value="{{ $kwitansi->id_kwitansi }}" @if ($kwitansi->id_kwitansi == $sewa->id_kwitansi) selected @endif>{{ $kwitansi->id_kwitansi }}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="col-12">
                                <label for="tgl_sewa" class="form-label"><strong>Tanggal Sewa:</strong></label>
                                <input type="date" name="tgl_sewa" class="form-control" id="tgl_sewa" value="{{ $sewa->tgl_sewa }}">
                            </div>
    
                            <div class="col-12">
                                <label for="tgl_selesai" class="form-label"><strong>Tanggal Selesai:</strong></label>
                                <input type="date" name="tgl_selesai" class="form-control" id="tgl_selesai" value="{{ $sewa->tgl_selesai }}">
                            </div>
    
                            <div class="col-12">
                                <label for="tlp_tujuan" class="form-label"><strong>Telepon Tujuan:</strong></label>
                                <input type="text" name="tlp_tujuan" class="form-control" id="tlp_tujuan" value="{{ $sewa->tlp_tujuan }}">
                            </div>
    
                            <div class="col-12">
                                <label for="alamat_tujuan" class="form-label"><strong>Alamat Tujuan:</strong></label>
                                <textarea name="alamat_tujuan" class="form-control" id="alamat_tujuan">{{ $sewa->alamat_tujuan }}</textarea>
                            </div>
    
                            <div class="col-12">
                                <label for="biaya_sewa" class="form-label"><strong>Biaya Sewa:</strong></label>
                                <input type="number" name="biaya_sewa" class="form-control" id="biaya_sewa" value="{{ $sewa->biaya_sewa }}">
                            </div>
    
                            <div class="col-12">
                                <label for="kota" class="form-label"><strong>Kota:</strong></label>
                                <input type="text" name="kota" class="form-control" id="kota" value="{{ $sewa->kota }}">
                            </div>
    
                            <div class="col-12">
                                <label for="jumlah_penumpang" class="form-label"><strong>Jumlah Penumpang:</strong></label>
                                <input type="number" name="jumlah_penumpang" class="form-control" id="jumlah_penumpang" value="{{ $sewa->jumlah_penumpang }}">
                            </div>
    
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary text-white">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
    
    <style>
        .container {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
        }
        .card {
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background: linear-gradient(45deg, #007bff, #00d4ff);
            color: white;
            border-radius: 0.75rem 0.75rem 0 0;
        }
        .btn-outline-primary {
            border-color: #007bff;
            color: #007bff;
        }
        .btn-outline-primary:hover {
            background-color: #007bff;
            color: white;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }
        .text-primary {
            color: #007bff !important;
        }
        .form-control, .form-select {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }
        .form-control:focus, .form-select:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
        }
    </style>
