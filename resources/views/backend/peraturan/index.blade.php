@extends('backend.dashboard.template.app')
@section('content')
<div class="container">
    <h2>Daftar List Peraturan</h2>
    <a href="{{ route('peraturan.create') }}" class="btn btn-success">TambahList Peraturan</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>List Peraturan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($peraturan as $dp)
                <tr>
                    <td>{{ $dp->id }}</td>
                    <td>{{ $dp->list_peraturan }}</td>
                    <td>
                        {{-- <a href="{{ route('kendaraans.show', $kendaraan->id) }}" class="btn btn-info">Lihat</a> --}}
                        {{-- <a href="{{ route('peraturan.edit', $dp->id) }}" class="btn btn-primary">Edit</a> --}}
                        <form action="{{ route('peraturan.destroy', $dp->id) }}" method="POST" style="display:inline;">
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