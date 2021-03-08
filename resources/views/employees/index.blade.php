@extends('layouts.app')
@extends('employees.layout')

@section('content')
<div class ="container">
    <div class="row">
        
            <div class="col-sm-4 col-3">

            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a class="btn btn-success" href="{{ route('employees.create') }}"> Create New Employee</a>
            </div>
         
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-3">Employee</h1>   
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                        
                            <tr>

                            <td>Name</td>
                            <td>Company</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <th width="280px">Action</th>
                        </tr>
                        
                        @foreach ($employees as $employee)
                        <tr>

                            <td>{{$employee->first_name}} {{$employee->last_name}}</td>
                            <td>{{$employee['id']}}</td>
                            {{-- <td>{{(isset($employee->companies->id))? $employee->companies->id : $employee->name}}</td> --}}
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->phone}}</td>
                            <td>
                                <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
    
                                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                        </table>
                    </div>
            </div>
        </div>
</div>
</div>    
@endsection