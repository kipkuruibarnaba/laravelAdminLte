<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $employees = Employee::all();
       foreach ( $employees as $employee) {
         $employee->company = Company::where(['id' => $employee->company_id])->first();
       }
        return view('welcome',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        return view('employee.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       try {
           if ($request->companyname == 0){
             return redirect()->back()->with('error', 'Failed No Company Selected !');
           } else{
            $Employeedata=([
                'firstname'=> $request->firstname,
                'lastname'=>$request->lastname,
                'company_id'=>$request->companyname,
                'email'=>$request->employeemail,
                'phone'=>$request->employeephone,
            ]);
            $data=Employee::create($Employeedata);
        
            return redirect()->back()->with('message', 'Employee Added Successfully!');
           }
       
        }catch (Exception $e){
            return $e->getMessage();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show()
    {
        $employees = Employee::all();
        foreach ( $employees as $employee) {
         $employee->company = Company::where(['id' => $employee->company_id])->first();
       }
        return view('employee.show',compact('employees'));
    }   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $employee = Employee::find($id);
       $companies = Company::all();
       return view('employee.edit', compact('employee','companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Employee=Employee::find($id);
        $Employee->firstname = $request->firstname;
        $Employee->lastname = $request->lastname;
        $Employee->company_id = $request->companyname;
        $Employee->email = $request->employeemail;
        $Employee->phone = $request->employeephone;
        $Employee->save();
        return redirect()->route('employees')->with('success' , 'Employee Updated Succesfullly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Employee=Employee::find($id);
        $Employee->delete();
        return redirect()->route('employees')->with('success' , 'Employee Trashed!');
    }

   public function trashed()
    {
        $employees=Employee::onlyTrashed()->get();
        foreach ( $employees as $employee) {
         $employee->company = Company::where(['id' => $employee->company_id])->first();
       }
        return view('employee.trashed',compact('employees'));

    } 

}
