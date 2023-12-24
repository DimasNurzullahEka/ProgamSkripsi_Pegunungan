@extends('backend.dashboard.template.app')
@section('content')
<div class="card-body">
    <h4 class="card-title">Basic form elements</h4>
    <p class="card-description">Basic form elements</p>
    <form class="forms-sample" action="{{route('jenis_bank.store')}}" method="POST">
        @csrf
      <div class="form-group">
        <label for="nama_bank">Nama Bank</label>
        <input type="text" class="form-control" id="nama_bank"  placeholder="nama_bank" name="nama_bank" required />
      </div>
      <div class="form-group">
        <label for="nomer_rekening">Nomer Rekening :</label>
        <input type="number" class="form-control" id="nomer_rekening" placeholder="nomer_rekening" name="nomer_rekening" required />
      </div>
      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
      <button class="btn btn-light">Cancel</button>
    </form>
  </div>
@endsection