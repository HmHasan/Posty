@extends('layout.app')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 bg-white rounded p-4">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label for="my-textarea">Post</label>
                        <textarea id="my-textarea" class="form-control" name="" rows="3"
                            placeholder="Write Here"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">This Is First Post</h5>
                    <p class="card-text">Content</p>
                </div>
            </div>
        </div>
    </div>
@endsection
