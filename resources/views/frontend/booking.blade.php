@extends('frontend.template.booking_app')
@section('content')
<section id="cta" class="cta">
    <div class="container">
        <div class="text-center">
            <h3>Form Pendaftaran Booking Online Pendakian Penanggungan</h3>
        </div>

    </div>

</section>
<h1><i class="fa fa-check"></i>Checklist Peraturan sebelum memasuki pendakian</h1>
<form id="todo-list" action="route">
    @foreach ($setting as $regulation)
    <div>
        <label class="container">
            {{-- <input type="checkbox" name="is_checked[]"  {{ $regulation->is_checked ? 'checked' : '' }} checked="checked">
            {{ $regulation->list_peraturan }} --}}
            <input type="checkbox" name="is_checked[]" {{ $regulation->is_checked ? 'checked' : '' }} checked="checked">  {{ $regulation->list_peraturan }}
            <span class="checkmark"></span>
        </label>
        <span class="checkmark"></span>
    </div>
@endforeach
    <button type="button" onclick="submitForm()">Submit</button>
</form>


@endsection
