<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Employee;
use App\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        dd('logout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        return view('todo.create',compact('employees'));
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
            $Tododata=([
                'todoname'=> $request->todoname,
                'employee_id'=>$request->employeename,
                'completed'=>$request->completed
            ]);
            $data=Todo::create($Tododata);
        
            return redirect()->back()->with('message', 'Todo Added Successfully!');
       
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
        $todos = Todo::all();
       foreach ( $todos as $todo) {
         $todo->employee = Employee::where(['id' => $todo->employee_id])->first();
       }
        return view('todo.show',compact('todos'));
    } 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $todo = Todo::find($id);
    //    dd($todo);
       $employees = Employee::all();
    //    dd($employees);
       return view('todo.edit', compact('todo','employees'));
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
        $Todo=Todo::find($id);
        $Todo->todoname = $request->todoname;
        $Todo->employee_id = $request->employeename;
        $Todo->completed = $request->completed;
        $Todo->save();
        return redirect()->route('todos')->with('success' , 'Todo Updated Succesfullly!');      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Todo=Todo::find($id);
        $Todo->delete();
        return redirect()->route('todos')->with('success' , 'Todo Trashed!');
    }

   public function trashed()
    {
       $todos=Todo::onlyTrashed()->get();
       foreach ( $todos as $todo) {
         $todo->employee = Employee::where(['id' => $todo->employee_id])->first();
         dd($todo->employee);
       }
      return view('todo.trashed',compact('todos'));

    }  

}
