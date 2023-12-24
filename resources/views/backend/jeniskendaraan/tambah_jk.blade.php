@extends('backend.dashboard.template.app')

@section('content')
<div class="card-body">
    <h4 class="card-title">Basic form elements</h4>
    <p class="card-description">Basic form elements</p>
    <form class="forms-sample" action="{{route('jenis_kendaraan.store')}}" method="POST">
        @csrf
      <div class="form-group">
        <label for="nama">Nama Kendaraan</label>
        <input type="text" class="form-control" id="nama"  placeholder="nama" name="nama" required />
      </div>
      <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" class="form-control" id="harga" placeholder="harga" name="harga" required />
      </div>
      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
      <button class="btn btn-light">Cancel</button>
    </form>
  </div>
{{-- <form action="{{ route('jenis_kendaraan.store') }}" method="post">
    @csrf
    <!-- Tambahkan field sesuai dengan kebutuhan -->
    <label for="nama">Nama Kendaraan:</label>
    <input type="text" name="nama" required>
    
    <label for="harga">Harga:</label>
    <input type="number" name="harga" required>
    
    <button type="submit">Simpan</button>
</form> --}}
@endsection