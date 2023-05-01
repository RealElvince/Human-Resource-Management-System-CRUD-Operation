@extends('employees.layout')

@section('content')

<div class="row">
   <div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Edit Employee</h2>
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
 <form action="{{route('employees.update',$employee->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <Strong>Start Date:</strong>
           <input type="text" name="start_date" value="{{$employee->start_date}}" class="form-control">
        </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <Strong>PayrollNo:</strong>
           <input type="text" name="payrollNo" value="{{$employee->payrollNo}}" class="form-control">
        </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <Strong>Employee Name:</strong>
           <input type="text" name="employee_name" value="{{$employee->employee_name}}" class="form-control">
        </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <Strong>Employee Phone:</strong>
           <input type="text" name="employee_phone" value="{{$employee->employee_phone}}" class="form-control">
        </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <Strong>Employee Email:</strong>
           <input type="email" name="employee_email" value="{{$employee->employee_email}}" class="form-control">
        </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <Strong>Department:</strong>
           <input type="text" name="department" value="{{$employee->deparment}}" class="form-control">
        </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <Strong>NHIF:</strong>
           <input type="text" name="nhif" value="{{$employee->nhif}}" class="form-control">
        </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <Strong>NSSF:</strong>
           <input type="text" name="nssf" value="{{$employee->nssf}}" class="form-control">
        </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <Strong>Leave Balance:</strong>
           <input type="text" name="leave_balance" value="{{$employee->leave_balance}}" class="form-control">
        </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <Strong>Monthly Allowance:</strong>
           <input type="text" name="monthly_allowance" value="{{$employee->monthly_allowance}}" class="form-control">
        </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <Strong>Gross Salary:</strong>
           <input type="text" name="gross_salary" value="{{$employee->gross_salary}}" class="form-control">
        </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12 text-center">
         <button type="submit" class="btn btn-primary">Submit</button>
       </div>
    </div>
 </form>
@endsection