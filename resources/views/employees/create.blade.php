@extends('employees.layout')

@section('content')
 <div class="row">
    <div class="col-lg-12 margin-tb">
         <div class="pull-left">
           <h2>Add New Employee</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('employees.index')}}">Back</a>
        </div>

    </div>
 </div>
 @if($errors->any())
   <div class="alert alert-danger">
     <strong>Whoops!</strong> There were some problems with your input.<br><br>
     <ul>
        @foreach($errors->all() as $error)

        <li>{{$error}}</li>
        @endforeach
     </ul>
   </div>
 @endif
 <form action="{{route('employees.store')}}" method="POST">
   @csrf
   <div class="row">
    <div class=" col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Start Date:</strong>
            <input type="text" name="start_date" class="form-control">
        </div>
    </div>
    <div class=" col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Payroll No:</strong>
            <input type="text" name="payrollNo" class="form-control">
        </div>
    </div>
     <div class=" col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Employee Name:</strong>
            <input type="text" name="employee_name" class="form-control">
        </div>
    </div>
     <div class=" col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Employee Phone:</strong>
            <input type="text" name="employee_phone" class="form-control">
        </div>
    </div>
     <div class=" col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Employee Email:</strong>
            <input type="email" name="employee_email" class="form-control">
        </div>
    </div>
     <div class=" col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Id Number:</strong>
            <input type="text" name="id_number" class="form-control">
        </div>
    </div>
     <div class=" col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Department:</strong>
            <input type="text" name="department" class="form-control">
        </div>
    </div>
     <div class=" col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NHIF:</strong>
            <input type="text" name="nhif" class="form-control">
        </div>
    </div>
     <div class=" col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NSSF:</strong>
            <input type="text" name="nssf" class="form-control">
        </div>
    </div>
     <div class=" col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Leave Balance:</strong>
            <input type="text" name="leave_balance" class="form-control">
        </div>
    </div>
     <div class=" col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Monthly Allowance:</strong>
            <input type="text" name="monthly_allowance" class="form-control">
        </div>
    </div>
     <div class=" col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Gross Salary:</strong>
            <input type="text" name="gross_salary" class="form-control">
        </div>
    </div>
    <div class=" col-xs-12 col-sm-12 col-md-12 text-center">
        <input type="button"class="btn btn-primary" value="Submit">
    </div>
 </div>    
</form>
@endsection
