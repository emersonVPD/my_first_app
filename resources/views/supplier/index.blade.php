@extends('Layout.app')
@section('content')

    <h1 class="text-center mb-3">SUPPLIER DETAILS</h1>
    <div class="container">

        @if (session('message'))
        <div class="alert alert-primary mt-2" role="alert">{{ session('message') }}</div>
        @endif

        <a href="{{ route('supplier.create') }}" class="btn btn-primary btn-sm mb-2">Add Supplier</a>
        <table class="table">
          <thead>
          <tr>
            <th scope="col">Company Name</th>
            <th scope="col">Email Address</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Types of Business</th>
            <th scope="col">Fax No.</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($supplier as $suppliers)
            <tr>
                <td>{{ $suppliers->company_name }}</th>
                <td>{{ $suppliers->email }}</th>
                <td>{{ $suppliers->company_phone }}</td>
                <td>{{ $suppliers->tob }}</td>
                <td>{{ $suppliers->fax_no }}</td>
                <td>
                <div class="row">
                    <div class="col">
                  <form method="POST" action="{{ route('supplier.destroy', $suppliers->id) }}">
                  @csrf
                  @method('DELETE') 
                        <a class="mb-2 btn btn-info" href="{{ route('supplier.show', $suppliers->id )}}"><i class="fa-regular fa-eye"></i></a>
                        <a class="mb-2 btn btn-warning" href="{{ route('supplier.edit', $suppliers->id )}}"><i class="fa-regular fa-pen-to-square"></i></a>
                        <button type="submit" class="mb-2 btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                  </form>
                        
                    </div>
                </div>
                </td>
              </tr>

            @endforeach
        </tbody>
      </table>
    </div>

  @endsection 