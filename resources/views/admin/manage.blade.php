@extends('admin.base')
@section('content')

<div class="col-lg-9">
    <table class="table">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>contact</th>
            <th>email</th>
            <th>gender</th>
            <th>dob</th>
            <th>image</th>
            <th>Action</th>
    </tr>
       @foreach ($applies as $apply)
       <tr>
        <td>{{$apply->id}}</td>
        <td>{{$apply->name}}</td>
        <td>{{$apply->contact}}</td>
        <td>{{$apply->email}}</td>
        <td>{{$apply->gender}}</td>
        <td>{{$apply->dob}}</td>
        <td>{{$apply->image}}</td>
        <td>
            <a href="" class="btn btn-danger">Delete</a>
            <a href="" class="btn btn-success">edit</a>
        </td>
    </tr>
       @endforeach
    </table>
</div>
@endsection
 