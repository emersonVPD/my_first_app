@extends('Layout.app')
@section('title')
    Create Employee
@endsection
@section('content')

<h1 class="text-center mt-5">Create - CRUD</h1>

<div class="container mt-5 border">
    @if (session('message'))
    <div class="alert alert-primary mt-2" role="alert">{{ session('message') }}</div>
@endif

<form method="post" action="{{ route('employee.store') }}">
    @csrf
    <!-- BASIC INFORMATION FORMS -->
    <div class="body me-5 ms-5 mb-5">
        <div class="mb-3 row mt-5">
            <label for="" class="col-md-2 form-label fw-bold">Firstname : </label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="firstname" maxlength="255" placeholder="Firstname" required="required">
        </div>
        </div>

        <div class="mb-3 row">
            <label for="" class="col-md-2 form-label fw-bold">Middlename : </label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="middlename" maxlength="255" placeholder="Middlename" required="required">
        </div>
        </div>

        <div class="mb-3 row">
            <label for="" class="col-md-2 form-label fw-bold">Lastname : </label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="lastname" maxlength="255" placeholder="Lastname" required="required">
        </div>
        </div>

        <div class="mb-3 row">
        <label for="" class="col-md-2 form-label fw-bold">Phone No.  </label>
        <div class="col-md-10">
            <input type="number" class="form-control" name="phone" id="phoneInput" placeholder="Phone no." required="required" oninput="validatePhoneNumber(this)">
            <script>
                function validatePhoneNumber(input) {
                    const phoneNumber = input.value.replace(/\D/g, ''); // Remove non-digit characters
                    if (phoneNumber.length > 13) {
                        input.value = phoneNumber.slice(0, 13); } }
            </script>
        </div>
        </div>

        <div class="mb-2 row">
            <label for="" class="col-md-2 form-label fw-bold">Age : </label>
        <div class="col-md-10">
            <input type="number" class="form-control" name="age" min="1" max="130" placeholder="Age" required="required">
        </div>
        </div>

    </div>

    <div class="float-end mt-3 mb-5 me-4">
        <button type="submit" name="insert" class="btn btn-primary">Insert</button>
        <a href="{{ route('employee.all') }}" class="btn btn-success" data-dismiss="modal">Cancel</a>
    </div>
</form>
</div>

@endsection 