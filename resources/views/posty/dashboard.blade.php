@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Dashboard</h5>
            <p class="card-text">{{ auth()->user() }}</p>
        </div>
    </div>
@endsection