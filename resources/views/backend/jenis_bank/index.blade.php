@extends('backend.dashboard.template.app')
@section('content')
<div class="container">
    <h2>Daftar Jenis Bank</h2>
    <a href="{{ route('jenis_bank.create') }}" class="btn btn-success">Tambah Nomer Rekening</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Jenis Bank</th>
                <th>Nomer Rekening Bank</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jenis_bank as $banks)
                <tr>
                    <td>{{ $banks->id }}</td>
                    <td>{{ $banks->nama_bank }}</td>
                    <td>{{ $banks->nomer_rekening }}</td>
                    <td>
                        {{-- <a href="{{ route('kendaraans.show', $kendaraan->id) }}" class="btn btn-info">Lihat</a> --}}
                        <a href="{{ route('jenis_bank.edit', $banks->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('jenis_bank.destroy', $banks->id) }}" method="POST" style="display:inline;">
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