@extends('frontend.layout.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Register Form</h1>
    <div class="row">
        
            <div class="col-md-12 center">
                <form action="{{ route('registerProcess') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" placeholder="Enter Name" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input name="phone_number" type="phone_number" class="form-control" placeholder="Enter Phone Number" value="{{ old('phone_number') }}">
                    @error('phone_number')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
    
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" placeholder="Enter password" value="{{ old('password') }}">
                    @error('password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
    
                <div class="form-group">
                    <label for="password">Repeat Password</label>
                    <input name="password_confirmation" type="password" class="form-control" placeholder="Repeat password" value="{{ old('password') }}">
                    @error('password_confirmation')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <button class="btn btn-primary" type="submit">Register</button>
            </form>
            </div>
        
    </div>

</div>
@endsection