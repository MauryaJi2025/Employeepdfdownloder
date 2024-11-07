@extends('layout')
@section('content')
   <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <a href="{{route('employee.index')}}">Show All Employee</a>
        <h2>Update Employee</h2>
        <form action="{{route('employee.update',$Employee->id)}}" method="post">
            @csrf
            @method('PUT')  
            <label>Name</label>
            <input type="text" name="name" value="{{$Employee->name}}"/><br><br>
            @error('name')
            <p class="error text-danger">{{ $message }}</p>
            @enderror
            <label>Email</label>
            <input type="email" name="email" value="{{$Employee->email}}" /><br><br>
            @error('email')
            <p class="error text-danger">{{ $message }}</p>
            @enderror
            <label>Designation</label>
            <input type="text" name="designation" value="{{$Employee->designation}}"/><br><br>
            @error('designation')
            <p class="error text-danger">{{ $message }}</p>
            @enderror
            <label>Salary</label>
            <input type="text" name="salary"  value="{{$Employee->salary}}"/><br><br>
            @error('salary')
            <p class="error text-danger">{{ $message }}</p>
            @enderror
            <button class="btn btn-lg btn-primary btn-center">Update</button>
        </form>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection

