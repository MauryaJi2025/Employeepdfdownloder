@extends('layout')
@section('content')
    <div class="row">
        <div class="col-sm-12">
        {{-- yha pr employee.create hoga jb hm web app pr route me employee diye hongetb --}}
            <a href="{{route('employee.create')}}">Add Employee</a>
            <a href="{{ route('allemployee.pdf') }}" class="btn btn-secondary mb-3">Pdf All Employee</a>
            <h2 class="text-primary">Show All Employee</h2>
            <div class="d-flex gap-5 text-danger">
                <div>id</div>
                <div>Name</div>
                <div>Email</div>
                <div>Designation</div>
                <div>Salary</div>
            </div>
            @foreach ($employees as $employee)
            <div class="d-flex gap-4">
                <p>{{$employee->id}}</p>
                <p>{{$employee->name}}</p>
                <p>{{$employee->email}}</p>
                <p>{{$employee->designation}}</p>
                <p>{{$employee->salary}}</p>               
                <form action="{{ route('employee.destroy', $employee->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-lg btn-danger" value="Delete"/>
                </form>
                <a href="{{route('employee.edit',$employee->id)}}" class="btn btn-success mb-3">Update</a>     
                <a href="{{ route('firstemployee.pdf',$employee->id) }}" class="btn btn-primary mb-3">Pdf </a>          
            </div>    
            @endforeach
        </div>
    </div>
@endSection