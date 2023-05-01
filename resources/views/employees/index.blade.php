@extends('employees.layout');

@section('content')

<div class="pull-left">
    <h2>HRM crud operation</h2>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class=" btn btn-success" href="{{route('employees.create')}}">Create New Employee</a>
        </div>
    </div>
</div>

@if($message=Session::get('success'))
   <div class=" alert alert-success">
    <p>{{$message}}</p>
   </div>
@endif

<table class=" table table-bordered">
    <tr>
        <th>id</th>
        <th>start_date</th>
        <th>payrollNo</th>
        <th>employee_name</th>
        <th>employee_phone</th>
        <th>employee_email</th>
        <th>id_number</th>
        <th>department</th>
        <th>nhif</th>
        <th>nssf</th>
        <th>leave_balance</th>
        <th>monthly_allowance</th>
        <th>gross_salary</th>   
        <th width="300px">Actions</th>
        @foreach($employees as $employee)
        <tr>
            <td>
                {{++$i}}
            </td>
            <td>
                {{$employee->start_date}}
            </td>
             <td>
                {{$employee->payrollNo}}
            </td>
             <td>
                {{$employee->employee_name}}
            </td>
             <td>
                {{$employee->employee_phone}}
            </td>
             <td>
                {{$employee->employee_email}}
            </td>
             <td>
                {{$employee->id_number}}
            </td>
             <td>
                {{$employee->department}}
            </td>
             <td>
                {{$employee->nhif}}
            </td>
             <td>
                {{$employee->nssf}}
            </td>
             <td>
                {{$employee->nssf}}
            </td>
             <td>
                {{$employee->leave_balance}}
            </td>
             <td>
                {{$employee->monthly_allowance}}
            </td>
             <td>
                {{$employee->gross_salary}}
            </td>
            <td>
                <form action="{{route('employees.destroy',$employee->id)}}" method="POST">
                    <a class="btn btn-info" href="{{ route('employees.show',$employee->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tr>
</table>