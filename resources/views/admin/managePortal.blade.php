@extends('admin.base')
@section('content')

<div class="col-lg-9">
    <div class="row">
        <div class="col-8">
            <h4>Manage Portal</h4>
        </div>
        <div class="col-4">
            <a href="{{route('admin.portal.create')}}" class="btn btn-success float-end">Add New Portal</a>
        </div>
    </div>
    <table class="table">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>tags</th>
            <th>price</th>
            <th>discount_price</th>
            <th>description</th>
            <th>features</th>
            <th>status</th>
            <th>image</th>
            <th>company_name</th>
            <th>reg_no</th>
            <th>Action</th>
    </tr>
       @foreach ($portals as $portal)
       <tr>
        <td>{{$portal->id}}</td>
        <td>{{$portal->title}}</td>
        <td>{{$portal->tags}}</td>
        <td>{{$portal->price}}</td>
        <td>{{$portal->discount_price}}</td>
        <td>{{$portal->description}}</td>
        <td>{{$portal->features}}</td>
        <td>{{$portal->status}}</td>
        <td>{{$portal->image}}</td>
        <td>{{$portal->company_name}}</td>
        <td>{{$portal->reg_no}}</td>
        <td>
            <a href="" class="btn btn-danger">Delete</a>
            <a href="" class="btn btn-success">edit</a>
        </td>
    </tr>
       @endforeach
    </table>
</div>
@endsection
 