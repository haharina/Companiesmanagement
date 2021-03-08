@extends('layouts.app')
@extends('employees.layout')
  
@section('content')
<div class="container">

  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Employee</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

      <form method="post" action="{{ route('employees.store') }}">
          @csrf
        
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">    
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <label for="city">Company</label>
            <input type="text" class="form-control" name="company"/>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" class="form-control" name="phone"/>
         </div>
        </div>
          
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
                                
      </form>
  </div>
</div>
</div>
</div>
@endsection