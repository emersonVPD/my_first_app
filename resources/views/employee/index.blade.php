@extends('Layout.app')
@section('content')

    <h1 class="text-center mb-3">INDEX - CRUD OPERATION</h1>
    <div class="container">

        @if (session('message'))
        <div class="alert alert-primary mt-2" role="alert">{{ session('message') }}</div>
    @endif

        <a href="{{ route('employee.create') }}" class="btn btn-primary btn-sm mb-2">Add Employee</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Firstname</th>
            <th scope="col">Middlename</th>
            <th scope="col">Lastname</th>
            <th scope="col">Age</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($employee as $employees)
            <tr>
                <td>{{ $employees->id }}</th>
                <td>{{ $employees->firstname }}</th>
                <td>{{ $employees->middlename }}</td>
                <td>{{ $employees->lastname }}</td>
                <td>{{ $employees->age }}</td>
                <td>
                <div class="row">
                    <div class="col">
                  <form method="POST" action="{{ route('employee.destroy', $employees->id) }}">
                  @csrf
                  @method('DELETE') 

                        <a class="mb-2 btn btn-info" href="{{ route('employee.show', $employees->id )}}"><i class="fa-regular fa-eye"></i></a>
                        <a class="mb-2 btn btn-warning" href="{{ route('employee.edit', $employees->id )}}"><i class="fa-regular fa-pen-to-square"></i></a>
                        <button type="submit" class="mb-2 btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                  </form>
                        
                    </div>
                </div>
                </td>
              </tr>

            @endforeach
            

            {{-- @foreach($employees as $employee)
          <tr>
            <td>{{ $employee->id }}</th>
            <td>{{ $employee->firstname }}</th>
            <td>{{ $employee->middlename }}</td>
            <td>{{ $employee->lastname }}</td>
            <td>{{ $employee->age }}</td>
          </tr>
            @empty
          <tr>
            <td colspan="5">No Employees Found</td>
          </tr>
          @endforeach --}}
        </tbody>
      </table>
    </div>

  @endsection 