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
<form action="{{ route('jenis_bank.update', $jenis_bank->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="id">id:</label>
        <input type="text" name="id" value="{{ $jenis_bank->id }}" required>
    </div>
    <div class="form-group">
        <label for="nama_bank">Nama:</label>
        <input type="text" name="nama_bank" value="{{ $jenis_bank->nama_bank }}" required>
    </div>
    <div class="form-group">
        <label for="nomer_rekening">Nomer Rekening</label>
        <input type="number" class="form-control" id="nomer_rekening" placeholder="nomer_rekening" name="nomer_rekening"  value="{{ $jenis_bank->nomer_rekening }}" required />
      </div>
    <!-- Add other form fields as needed -->

    <button type="submit" class="btn btn-primary">Update Data Kategori</button>
</form>
@endsection