@extends('layout.app')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Register</h5>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="my-input">Name</label>
                            <input id="my-input" class="form-control @error('name')  is-invalid @enderror" type="text" name="name" value="{{ old('name') }}">
                            @error('name')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="my-input">User Name</label>
                            <input id="my-input" class="form-control @error('username')  is-invalid @enderror" type="text" name="username" value="{{ old('username') }}">
                            @error('username')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="my-input">Email</label>
                            <input id="my-input" class="form-control @error('email')  is-invalid @enderror" type="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="my-input">Password</label>
                            <input id="my-input" class="form-control @error('password')  is-invalid @enderror" type="password" name="password">
                            @error('password')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="my-input">Confirm Password</label>
                            <input id="my-input" class="form-control " type="password" name="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection