<x-app-layout>

    @section('content')
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <h2>Detail Penyewa</h2>
                <a class="btn btn-primary" href="{{ route('penyewa.index') }}">Kembali</a>
            </div>
        </div>
    
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Penyewa</h5>
    
                        <div class="mb-3">
                            <strong>Nama Penyewa:</strong>
                            <p>{{ $penyewa->nama_penyewa }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Alamat:</strong>
                            <p>{{ $penyewa->alamat }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>No HP:</strong>
                            <p>{{ $penyewa->no_hp }}</p>
                        </div>
    
                        <a class="btn btn-primary" href="{{ route('penyewa.edit', $penyewa->id_penyewa) }}">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
    