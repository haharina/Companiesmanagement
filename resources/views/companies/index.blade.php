@extends('layouts.app')
@extends('companies.layout')

@section('content')
<div class ="container">
    <div class="row">
        
            <div class="col-sm-4 col-3">

            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a class="btn btn-success" href="{{ route('companies.create') }}"> Create New Company</a>
            </div>
         
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-3">Company</h1>   
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                        
                            <tr>
                                <th>No</th>
                                <th>Company Name</th>
                                <th>Email</th>
                                <th>Company Logo</th>
                                <th>Website</th>
                                <th width="280px">Action</th>
                        </tr>
                        
                        @foreach ($companies as $companies)
                        <tr>
                            <td>{{$companies->id}}</td>
                            <td>{{$companies->name}}</td>
                            <td>{{$companies->email}}</td>
                            <td><img src= "store_image/fetch_image/{{$companies->logo}}"class="img-thumbnail" width="75" /></td>

                            <td>{{$companies->website}}</td>
                            <td>
                                <form action="{{ route('companies.destroy',$companies->id) }}" method="POST">
    
                                    <a class="btn btn-primary" href="{{ route('companies.edit',$companies->id) }}">Edit</a>
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