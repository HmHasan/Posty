@extends('layout.app')
@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

    <div class="card">
        <div class="card-body">
            <h4>Home</h4>
        </div>
    </div>
@endsection