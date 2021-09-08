<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\File;
use App\Company;
use App\Employee;
use App\Todo;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employees = Employee::all();
       foreach ( $employees as $employee) {
         $employee->company = Company::where(['id' => $employee->company_id])->first();
       }
        return view('home',compact('employees'));
    }

    public function create()
    {
        return view('company.create');
    }   
    
    public function store(Request $request)
    {
       try {
            $companylogo=$request->file('companylogo');
            $logoNewName=time().$companylogo->getClientOriginalName();
            $destinationPath = public_path().'/uploads' ;
            $companylogo->move($destinationPath,$logoNewName);
            $companydata=([
                'name'=> $request->companyname,
                'email'=>$request->campanyemail,
                'logo'=> 'uploads/'.$logoNewName
            ]);
            $data=Company::create($companydata);
        
             return redirect()->route('companies')->with('message' , 'Company Created Succesfullly!');
       
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

   public function show()
    {
        $companies = Company::all();
        return view('company.show',compact('companies'));
    }  
    
   public function edit($id)
    {
       $company = Company::find($id);
       return view('company.edit', compact('company'));
    }  

 public function update(Request $request, $id)
    {
      $Company=Company::find($id);
        if($request->hasFile('companylogo')){
            $companylogo=$request->file('companylogo');
            $logoNewName=time().$companylogo->getClientOriginalName();
            $destinationPath = public_path().'/uploads' ;
            $companylogo->move($destinationPath,$logoNewName);
            $Company->logo = 'uploads/'.$logoNewName;
        }

        $Company->name = $request->input('companyname');
        $Company->email = $request->input('campanyemail');
        $Company->save();

        return redirect()->route('companies')->with('success' , 'Company Updated Succesfullly!');
    } 

    public function destroy($id)
    {
         $Company=Company::find($id);
         $Employees = Employee::where(['company_id'=>$Company->id])->get();
         
         foreach($Employees as $Employee){
           $Todos = Todo::where(['id'=>$Employee->id])->delete();
         }

         $Employees = Employee::where(['company_id'=>$Company->id])->get();
         $Employees = Employee::where(['company_id'=>$Company->id])->delete();
         $Company=Company::find($id);
         $Company->delete();


        return redirect()->route('companies')->with('success' , 'Company data Trashed!');
    }

   public function trashed()
    {
        $companies=Company::onlyTrashed()->get();
        return view('company.trashed',compact('companies'));
    }   

}
