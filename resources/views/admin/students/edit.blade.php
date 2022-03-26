@extends('admin.layout')

@section('content')

    <div class="d-flex justify-content-between mb-3">
        <h6>Student / Edit / {{ $student->name }}</h6>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.students.index') }}">Back</a>
    </div>
    <form method="POST" action="{{ route('admin.students.update') }}" enctype="multipart/form-data">
        @csrf
        <input name="id" type="hidden" value="{{ $student->id }}">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $student->name }}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="{{ $student->email }}">
        </div>
        <div class="form-group">
            <label>Spec</label>
            <input type="text" name="spec" class="form-control" value="{{ $student->spec }}">
        </div>
        <button type="submit" class="btn btn-primary mt-5">Submit</button>
    </form>

@endsection
