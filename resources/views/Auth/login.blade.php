@extends('layout.app')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}"> 
                        @csrf
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
                        <div class="form-check">
                            <input id="my-input" class="form-check-input" type="checkbox" name="remember" value="true">
                            <label for="my-input" class="form-check-label">Remember me</label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection