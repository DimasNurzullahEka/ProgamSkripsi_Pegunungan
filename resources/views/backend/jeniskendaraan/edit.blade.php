@extends('backend.dashboard.template.app')
@section('content')
<h2>Edit Datakategori</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('jenis_kendaraan.update', $dataKendaraan->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="id">id:</label>
        <input type="text" name="id" value="{{ $dataKendaraan->id }}" required>
    </div>
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="{{ $dataKendaraan->nama }}" required>
    </div>
    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" class="form-control" id="harga" placeholder="harga" name="harga"  value="{{ $dataKendaraan->harga }}" required />
      </div>
    <!-- Add other form fields as needed -->

    <button type="submit" class="btn btn-primary">Update Data Kategori</button>
</form>
@endsection