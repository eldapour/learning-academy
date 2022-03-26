@extends('admin.layout')

@section('content')

    <div class="d-flex justify-content-between mb-3">
        <h6>Student / Add new</h6>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.students.index') }}">Back</a>
    </div>

    @include('admin.inc.errors')

    <form method="POST" action="{{ route('admin.students.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Speciation</label>
            <input type="text" name="spec" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-5">Submit</button>
    </form>

@endsection
