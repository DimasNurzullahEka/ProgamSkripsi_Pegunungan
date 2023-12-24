@extends('backend.dashboard.template.app')
@section('content')
<div class="card-body">
    <h4 class="card-title">Basic form elements</h4>
    <p class="card-description">Basic form elements</p>
    <form class="forms-sample" action="{{route('peraturan.store')}}" method="POST">
        @csrf
      <div class="form-group">
        <label for="list_peraturan">Peraturan</label>
        <input type="text" class="form-control" id="list_peraturan"  placeholder="list_peraturan" name="list_peraturan" required />
      </div>
      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
      <button class="btn btn-light">Cancel</button>
    </form>
  </div>
@endsection