@extends('admin.base')


@section('content')
    <div class="col-9">

        <div class="row">
            <div class="col-12">
                <form action="{{route('admin.portal.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <h1></h1>
                        <label for="">title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                        @error('title')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">tags</label>
                        <input type="text" name="tags" class="form-control" value="{{ old('tags') }}">
                        @error('tags')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                  
                    <div class="mb-3">
                        <label for="">price</label>
                        <input type="price" name="price" class="form-control" value={{ old('price') }}>
                        @error('price')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">discount_price</label>
                        <input type="text" name="discount_price" class="form-control" value={{ old('discount_price') }}>
                        @error('discount_price')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">description</label>
                        <input type="text" name="description" class="form-control" value={{ old('description') }}>
                        @error('description')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                   
                    <div class="mb-3">
                        <label for="">features</label>
                        <input type="text" name="features" class="form-control" value={{ old('description') }}>
                        @error('features')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                   
                    <div class="mb-3">
                        <label for="">status</label>
                        <input type="text" name="status" class="form-control" value={{ old('status') }}>
                        @error('status')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                   <div class="mb-3">
                        <label for="">image</label>
                        <input type="file" name="image" class="form-control"enctype="multipart/data">
                        @error('image')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">company_name</label>
                        <input type="text" name="company_name" class="form-control" value={{ old('company_name') }}>
                        @error('company_name')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div> <div class="mb-3">
                        <label for="">reg_no</label>
                        <input type="text" name="reg_no" class="form-control" value={{ old('reg_no') }}>
                        @error('reg_no')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    
                    <br>
                    <input type="submit" name="send" class="btn btn-success">
                </form>
            </div>
        </div>

    </div>
@endsection


