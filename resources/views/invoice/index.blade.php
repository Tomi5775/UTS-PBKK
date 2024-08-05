<x-app-layout>

    @section('content')
    <section class="section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 d-flex justify-content-between align-items-center">
                    <h2>Daftar Invoice</h2>
                    <a class="btn btn-success" href="{{ route('invoice.create') }}">
                        <i class="bi bi-plus-lg"></i> Tambah Invoice
                    </a>
                </div>
            </div>
    
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
    
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Invoice</h5>
    
                    <!-- Table with stripped rows -->
                    <div class="table-responsive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">No</th>
                                    <th style="width: 25%;">ID Kwitansi</th>
                                    <th style="width: 25%;">Nama Penyewa</th>
                                    <th style="width: 25%;">No Polisi</th>
                                    <th style="width: 20%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoices as $invoice)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $invoice->id_kwitansi }}</td>
                                        <td>{{ $invoice->penyewa->nama_penyewa }}</td>
                                        <td>{{ $invoice->no_pol }}</td>
                                        <td>
                                            <form action="{{ route('invoice.destroy', $invoice->id) }}" method="POST" class="d-inline">
                                                <a class="btn btn-info" href="{{ route('invoice.show', $invoice->id) }}">
                                                    <i class="bi bi-eye-fill"></i> View
                                                </a>
                                                <a class="btn btn-primary" href="{{ route('invoice.edit', $invoice->id) }}">
                                                    <i class="bi bi-pencil-fill"></i> Edit
                                                </a>
    
                                                @csrf
                                                @method('DELETE')
    
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="bi bi-trash-fill"></i> Delete
                                                </button>
                                            </form>
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
    </section>
    
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
    
        .btn-primary, .btn-info, .btn-success, .btn-danger {
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
    
        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
            color: white;
        }
    
        .btn-info:hover {
            background-color: #138496;
            border-color: #117a8b;
        }
    
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
        }
    
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
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
            margin-bottom: 1.5rem;
        }
    
        .table th, .table td {
            padding: 0.75rem;
            vertical-align: middle;
        }
    
        .table th {
            background-color: #f8f9fa;
        }
    
        .table thead th {
            position: sticky;
            top: 0;
            z-index: 1;
        }
    
        .table-responsive {
            overflow-x: auto;
        }
    </style>
    
    
    </x-app-layout>
    