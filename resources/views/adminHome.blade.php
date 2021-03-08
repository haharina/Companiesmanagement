@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Admin Menu</div>
                <div class="card-body">

                    <a href="{{ url('employees') }}">Manage Employee</a>
                    <br>
                    <a href="{{ url('companies') }}">Manage Company</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection