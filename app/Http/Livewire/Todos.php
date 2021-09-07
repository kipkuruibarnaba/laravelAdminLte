<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;
use App\Models\Employee;

class Todos extends Component
{
    public $todoname, $completed,$employeename;

    public function render()
    {
        $employees = Employee::all();
        return view('livewire.todos',compact('employees'));
    }

    private function resetInput()
    {
        $this->todoname = null;
        $this->completed = null;
    }

    public function store()
    {
        dd($this->completed);
        $Todo = new Todo;
        $Todo->todoname = $this->todoname;
        $Todo->employee_id = $this->employeename;
        $Todo->completed = $this->completed;
        $Todo->save();
        $this->resetInput();
    }    
}
