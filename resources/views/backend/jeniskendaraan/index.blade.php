@extends('backend.dashboard.template.app')
@section('content')
<div class="container">
    <h2>Daftar Kendaraan</h2>
    <a href="{{ route('jenis_kendaraan.create') }}" class="btn btn-success">Tambah Kendaraan</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kendaraan</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kendaraans as $kendaraan)
                <tr>
                    <td>{{ $kendaraan->id }}</td>
                    <td>{{ $kendaraan->nama }}</td>
                    <td>{{ $kendaraan->harga }}</td>
                    <td>
                        {{-- <a href="{{ route('kendaraans.show', $kendaraan->id) }}" class="btn btn-info">Lihat</a> --}}
                        <a href="{{ route('jenis_kendaraan.edit', $kendaraan->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('jenis_kendaraan.destroy', $kendaraan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection