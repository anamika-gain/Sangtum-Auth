<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use Excel;
use App\Imports\EmployeeImport;
class EmployeeController extends Controller
{
  
    public function allEmployee()
    {
        $employee = Employee::all();
        return view('employee.import-form',compact('employee'));
    }
    public function addEmployee()
    {
        $employee=[
          ["name"=>"Alice Mike","email"=>"alice@gmail.com","age"=>"28","designation"=>"manager"],
          ["name"=>"Anamika Gain","email"=>"anamika@gmail.com","age"=>"26","designation"=>"Assistant Manager"],
          ["name"=>"Deb Gain","email"=>"deb@gmail.com","age"=>"34","designation"=>" Officer"],
          ["name"=>"Rupa Gain","email"=>"rupagain@gmail.com","age"=>"21","designation"=>"junior Officer"],
        ];
        Employee::insert($employee);
        return "Records are inserted";
    }


    public function exportIntoExcel()
    {
        return Excel::download(new EmployeeExport,'employeelist.xlsx');
    }


    public function exportIntoCSV()
    {
        return Excel::download(new EmployeeExport,'employeelist.csv');
    }
    public function importFrom()
    {
        $employee = Employee::all();
        return view('employee.import-form',compact('employee'));
    }
   public function import(Request $request){

        Excel::import(new EmployeeImport,$request->file);

         return  redirect()->back()->with('success','Record are imported Successfully');
   }
 
   
}
