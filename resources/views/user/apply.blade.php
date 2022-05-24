@extends('user.base')


@section('content')
    <div class="container">

        <div class="row">
            <div class="col-6">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <h1>insert here</h1>
                        <label for="">name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">contact</label>
                        <input type="text" name="contact" class="form-control" value="{{ old('contact') }}">
                        @error('contact')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                   
                    <div class="mb-3">
                        <label for="">email</label>
                        <input type="email" name="email" class="form-control" value={{ old('email') }}>
                        @error('email')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">gender</label>
                        <input type="text" name="gender" class="form-control" value={{ old('gender') }}>
                        @error('gender')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">dob</label>
                        <input type="text" name="dob" class="form-control" value={{ old('dob') }}>
                        @error('dob')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                   
                   
                  
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control"enctype="multipart/data">
                        @error('image')
                            <p class="small text-dark">{{ $message }}</p>
                        @enderror
                    </div>
                   

                    <br>
                    <input type="submit" name="send" class="btn btn-success">
                </form>
            </div>
        </div>

    </div>
@endsection


