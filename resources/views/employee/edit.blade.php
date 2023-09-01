@extends('layout.app')
@section('content')

<h1 class="text-center mt-5">EDIT - CRUD</h1>

<div class="container mt-5 border">
<form method="post" action="{{ route('employee.update', $employee->id) }}">
    @csrf
    @method("PUT")
    <!-- BASIC INFORMATION FORMS -->
    <div class="body me-5 ms-5 mb-5">
        <div class="mb-3 row mt-5">
            <label for="" class="col-md-2 form-label fw-bold">Firstname : </label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="firstname" value="{{ $employee->firstname }}" maxlength="255" required="required">
                </div>
        </div>

        <div class="mb-3 row">
            <label for="" class="col-md-2 form-label fw-bold">Middlename : </label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="middlename" value="{{ $employee->middlename }}" maxlength="255"  required="required">
                </div>
        </div>

        <div class="mb-3 row">
            <label for="" class="col-md-2 form-label fw-bold">Lastname : </label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="lastname" value="{{ $employee->lastname }}" maxlength="255" required="required">
                </div>
        </div>

        <div class="mb-3 row">
            <label for="" class="col-md-2 form-label fw-bold">Phone No.  </label>
                <div class="col-md-10">
                    <input type="number" class="form-control" name="phone" id="phoneInput" value="{{ $employee->phone }}" required="required" oninput="validatePhoneNumber(this)">
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
                    <input type="number" class="form-control" name="age" min="1" max="130" value="{{ $employee->age }}" required="required">
                </div>
        </div>

    </div>

    <div class="float-end mt-3 mb-5 me-4">
        <button type="submit" name="update" class="btn btn-primary">Update</button>
            <a href="{{ route('employee.all') }}" class="btn btn-success"  data-dismiss="modal">Cancel</a>
    </div>
</form>
</div>

@endsection 