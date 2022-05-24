@extends('user.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                @foreach($portals as $item)
                <div class="card-body">
                    <img src="">
                    <h5>{{$item->title}}</h5>
                    <h1>{{$item->tags}}</h1>
                    <h1>{{$item->price}}</h1>
                    <h1>{{$item->discount_price}}</h1>
                    <p>{{$item->features}}</p>
                    <h1>{{$item->status}}</h1>
                    <h1>{{$item->image}}</h1>
                    <h1>{{$item->company_name}}</h1>
                    <h1>{{$item->reg_no}}</h1>
                   
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
