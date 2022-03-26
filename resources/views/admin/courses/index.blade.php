@extends('admin.layout')

@section('content')

        <div class="d-flex justify-content-between mb-5">
            <h6>Courses</h6>
            <a class="btn btn-sm btn-primary" href="{{ route('admin.courses.create') }}">Add New</a>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Img</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $c)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        <img src="{{ asset('uploads/courses/' .$c ->img) }}" height="50px">
                    </td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->price }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{ route('admin.courses.edit', $c->id) }}">Edit</a>
                        <a class="btn btn-sm btn-danger" href="{{ route('admin.courses.delete', $c->id)    }}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

@endsection
