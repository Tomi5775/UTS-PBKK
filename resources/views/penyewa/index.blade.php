@extends('layouts.app')

@section('content')
<div class="container mt-5" style="background: linear-gradient(to right, #000000, #434343); padding: 20px; border-radius: 10px;">
    <h1 class="mb-4 text-center text-black" style="background: linear-gradient(to right, #ffffff, #f8f9fa); padding: 10px; border-radius: 5px;">Daftar Penyewa</h1>
    <a href="{{ route('penyewa.create') }}" class="btn btn-success mb-3">Tambah Penyewa</a>
    <table class="table table-hover shadow-sm" style="background-color: rgba(255, 255, 255, 0.8); border-radius: 10px;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Penyewa</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Hp</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penyewa as $p)
                <tr>
                    <td>{{ $p->id_penyewa}}</td>
                    <td>{{ $p->nama_penyewa }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->no_hp }}</td>
                    <td>
                        <a href="{{ route('penyewa.edit', $p->id_penyewa) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('penyewa.destroy', $p->id_penyewa) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus penyewa ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
