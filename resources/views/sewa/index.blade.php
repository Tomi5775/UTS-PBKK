<x-app-layout>
    <section class="section py-6">
        <div class="container mx-auto px-4">
            <div class="row mb-4">
                <div class="col-lg-12 d-flex justify-content-between align-items-center">
                    <h2 class="text-2xl font-bold mb-0">Daftar Sewa</h2>
                    <a class="btn btn-success rounded-lg shadow-md px-4 py-2 text-white bg-green-500 hover:bg-green-600" href="{{ route('sewa.create') }}" title="Tambah Sewa">
                        <i class="bi bi-plus-lg"></i> Tambah Sewa
                    </a>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success mb-4 p-4 rounded-lg bg-green-100 text-green-800 border border-green-200">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="card shadow-md mb-4 rounded-lg overflow-hidden">
                <div class="card-body p-4">
                    <h5 class="card-title text-xl font-semibold mb-4">Data Sewa</h5>

                    <!-- Table with stripped rows -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Sewa</th>
                                    <th>No Polisi</th>
                                    <th>Tanggal Sewa</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Telepon Tujuan</th>
                                    <th>Alamat Tujuan</th>
                                    <th>Biaya Sewa</th>
                                    <th>Kota</th>
                                    <th>Nama Penyewa</th>
                                    <th>Jumlah Penumpang</th>
                                    <th>ID Kwitansi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sewas as $sewa)
                                    <tr class="hover:bg-gray-50">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sewa->id_sewa }}</td>
                                        <td>{{ $sewa->no_pol }}</td>
                                        <td>{{ $sewa->tgl_sewa }}</td>
                                        <td>{{ $sewa->tgl_selesai }}</td>
                                        <td>{{ $sewa->tlp_tujuan }}</td>
                                        <td>{{ $sewa->alamat_tujuan }}</td>
                                        <td>{{ number_format($sewa->biaya_sewa, 0, ',', '.') }}</td>
                                        <td>{{ $sewa->kota }}</td>
                                        <td>{{ $sewa->penyewa->nama_penyewa }}</td>
                                        <td>{{ $sewa->jumlah_penumpang }}</td>
                                        <td>{{ $sewa->id_kwitansi }}</td>
                                        <td>
                                            <div class="flex space-x-2">
                                                <a class="btn btn-primary rounded-lg shadow-md px-3 py-1" href="{{ route('sewa.edit', $sewa->id_sewa) }}" title="Edit Sewa">
                                                    <i class="bi bi-pencil-fill"></i> Edit
                                                </a>
                                                <form action="{{ route('sewa.destroy', $sewa->id_sewa) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger rounded-lg shadow-md px-3 py-1" title="Hapus Sewa">
                                                        <i class="bi bi-trash-fill"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table with stripped rows -->
                </div>
            </div>
        </div>
        <style>
            .table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 1rem;
            }
        
            .table thead th {
                background-color: #1d4ed8;
                color: white;
                text-align: left;
                padding: 0.75rem;
                border-bottom: 2px solid #1e3a8a;
            }
        
            .table tbody td {
                padding: 0.75rem;
                border-bottom: 1px solid #e5e7eb;
            }
        
            .table-striped tbody tr:nth-of-type(odd) {
                background-color: rgba(0, 0, 0, 0.05);
            }
        
            .table-bordered {
                border: 1px solid #e5e7eb;
            }
        
            .table-bordered th, .table-bordered td {
                border: 1px solid #e5e7eb;
            }
        
            .btn-primary, .btn-success, .btn-danger {
                font-size: 0.875rem;
                padding: 0.375rem 0.75rem;
                border-radius: 0.375rem;
                text-align: center;
                display: inline-flex;
                align-items: center;
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
        
            .btn-success {
                background-color: #16a34a;
                border-color: #16a34a;
                color: white;
            }
        
            .btn-success:hover {
                background-color: #15803d;
                border-color: #15803d;
            }
        
            .btn-danger {
                background-color: #dc2626;
                border-color: #dc2626;
                color: white;
            }
        
            .btn-danger:hover {
                background-color: #b91c1c;
                border-color: #b91c1c;
            }
        </style>
        
    </section>
    
</x-app-layout>
