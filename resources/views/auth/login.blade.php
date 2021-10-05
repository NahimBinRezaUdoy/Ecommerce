@extends('frontend.layout.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Login Form</h1>
    <div class="row">
        
            <div class="col-md-12 center">
                <form action="" method="post">
                @csrf
                
                @if(session()->has('message'))
                <div class="alert alert-danger">
                    {{ session()->get('message') }}
                </div>
                @endif
    
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
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" placeholder="Enter password" value="{{ old('password') }}">
                    @error('password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

    
                <button class="btn btn-primary" type="submit">Login</button>
            </form>
            </div>
        
    </div>

</div>
@endsection