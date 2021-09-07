<div>

    <div>
        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        <form  wire:submit.prevent ="store">
          <div class="card-body">
      
            <div class="form-group">
              <label for="Employee">Select Employee</label>
              <select class="form-control" id="employeename" name="employeename" wire:model="employeename" required>
                <option></option>
                @foreach($employees as $employee)
                  <option value="{{$employee->id}}">{{$employee->firstname .'-'.$employee->lastname}}</option>
                @endforeach
              </select>
            </div>
      
            <div class="form-group">
              <label for="Todo ">Todo Name </label>
              <input type="name" class="form-control" id="todoname" name="todoname" placeholder="Enter Todo" wire:model="todoname" required>
            </div>
            <div class="form-group">
              <label for="status">Completed</label>
              <select class="form-control" id="completed" name="completed" wire:model="completed" required>
                <option></option>
                <option value="0">False</option>
                <option value="1">True</option>
              </select>
            </div>
          </div>        
          <div class="card-footer">
            <button type="submit" class="btn btn-secondary">Create Todo</button>
          </div>
        </form> 
      </div>
</div>
