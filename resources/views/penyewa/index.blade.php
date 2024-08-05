<x-app-layout>
    @section('content')
    <section class="section py-6">
        <div class="container mx-auto px-4">
            <div class="row mb-4">
                <div class="col-lg-12 d-flex justify-content-between align-items-center">
                    <h2 class="text-2xl font-bold mb-0">Daftar Penyewa</h2>
                    <a class="btn btn-success rounded-lg shadow-md" href="{{ route('penyewa.create') }}" title="Tambah Penyewa">
                        <i class="bi bi-plus-lg"></i> Tambah Penyewa
                    </a>
                </div>
            </div>
    
            @if ($message = Session::get('success'))
                <div class="alert-success mb-4">
                    <p>{{ $message }}</p>
                </div>
            @endif
    
            <div class="card shadow-md mb-4 rounded-lg overflow-hidden">
                <div class="card-body p-4">
                    <h5 class="card-title text-xl font-semibold mb-4">Data Penyewa</h5>
    
                    <!-- Table with stripped rows -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Penyewa</th>
                                    <th>Nama Penyewa</th>
                                    <th>Alamat</th>
                                    <th>No HP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penyewas as $penyewa)
                                    <tr class="hover:bg-gray-50">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $penyewa->id_penyewa }}</td>
                                        <td>{{ $penyewa->nama_penyewa }}</td>
                                        <td>{{ $penyewa->alamat }}</td>
                                        <td>{{ $penyewa->no_hp }}</td>
                                        <td>
                                            <div class="flex space-x-2">
                                                <a class="btn btn-primary" href="{{ route('penyewa.edit', $penyewa->id_penyewa) }}" title="Edit Penyewa">
                                                    <i class="bi bi-pencil-fill"></i> Edit
                                                </a>
                                                <form action="{{ route('penyewa.destroy', $penyewa->id_penyewa) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" title="Hapus Penyewa">
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
                background-color: #1d4ed8; /* Ubah sesuai warna tema */
                color: white;
                text-align: left;
                padding: 0.75rem;
                border-bottom: 2px solid #1e3a8a; /* Ubah sesuai warna tema */
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
        
            .btn-success {
                background-color: #28a745;
                border-color: #28a745;
                color: white;
                font-size: 0.875rem;
                padding: 0.375rem 0.75rem;
                border-radius: 0.375rem;
                display: inline-flex;
                align-items: center;
                text-decoration: none;
            }
        
            .btn-success:hover {
                background-color: #218838;
                border-color: #1e7e34;
            }
        
            .btn-primary {
                background-color: #6776f4;
                border-color: #6776f4;
                color: white;
                font-size: 0.875rem;
                padding: 0.375rem 0.75rem;
                border-radius: 0.375rem;
                display: inline-flex;
                align-items: center;
                text-decoration: none;
            }
        
            .btn-primary:hover {
                background-color: #4f46e5;
                border-color: #4f46e5;
            }
        
            .btn-danger {
                background-color: #dc3545;
                border-color: #dc3545;
                color: white;
                font-size: 0.875rem;
                padding: 0.375rem 0.75rem;
                border-radius: 0.375rem;
                display: inline-flex;
                align-items: center;
                text-decoration: none;
            }
        
            .btn-danger:hover {
                background-color: #c82333;
                border-color: #bd2130;
            }
        
            .alert-success {
                background-color: #d4edda;
                color: #155724;
                border: 1px solid #c3e6cb;
                padding: 1rem;
                border-radius: 0.375rem;
            }
        
            .card {
                border-radius: 0.375rem;
                box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
            }
        </style>
        
    </section>
    </x-app-layout>
    