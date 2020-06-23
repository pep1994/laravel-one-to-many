<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Location;

class EmployeeController extends Controller
{
    public function index() {

        $employees = Employee::all();
        return view('pages.employee', compact('employees'));
    }

    public function edit($id) {
        $employee = Employee::findOrFail($id);
        $locations = Location::all();
        return view('pages.editEmployee', compact('employee', 'locations'));
    }

    public function update(Request $request, $id) {
        $validateData = $request-> validate([
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'dateOfBirth' => 'required|date',
            'role' => 'required',
            'locations' => 'required|array'
        ]);

        $employee = Employee::findOrFail($id);

        $employee -> firstName =$validateData['firstname'];
        $employee -> lastName = $validateData['lastname'];
        $employee -> dateOfBirth = $validateData['dateOfBirth'];
        $employee -> role = $validateData['role'];
        $employee->save();

        $employee -> locations() -> sync($validateData['locations']);

        return redirect()->route('home') -> withSuccess("Update Employee riuscito");
    }

    public function delete($id) {
        Employee::whereId($id) -> delete();
        return redirect()->route('home') -> withSuccess("Employee eliminato con successo");
    }

}
