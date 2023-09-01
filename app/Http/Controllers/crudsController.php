<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

class crudsController extends Controller
{
    //Display a listing of the resource.
    public function index()
    {
        $employee = Employee::all();
        return view('employee.index')->with('employee',$employee);
    }

    public function store(Request $request)
    {
            $employee = employee::create([
                'id' => $request->id,
                'firstname' => $request->firstname,
                'middlename' => $request->middlename,
                'lastname' => $request->middlename,
                'age' => $request->age,
                'phone' => $request->phone,
        ]);
        
        return redirect()->route('employee.index')->with('message', 'Success Insert');
    }

     public function edit($id)
     {  
        $employee = Employee::find($id);
            return view('employee.edit',[
                'employee' => $employee,      
     ]);
     }

    public function create()
    {
       return view('employee.create');
    }

    public function back()
    {
        return redirect()->back();
    }

    // Display the specified resource.
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employee.show',[
            'employee' => $employee,
    ]);
    }

    //Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'firstname' => ['required'],
            'middlename' => ['required'],
            'lastname' => ['required'],
            'age' => ['required'],
            'phone' => ['required','nullable'],
        ]);

            $employee = Employee::find($id);
            $employee->firstname = $request->firstname;
            $employee->middlename = $request->middlename;
            $employee->lastname = $request->lastname;
            $employee->age = $request->age;
            $employee->phone = $request->phone;
            $employee->save();

            return redirect()->route('employee.index')->with('message', 'Success Updated');
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        Employee::find($id)->delete();
        return back()->with('message', 'Success Deleted');
    }
}
