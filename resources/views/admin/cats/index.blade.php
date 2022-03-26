@extends('admin.layout')

@section('content')
        <div class="d-flex justify-content-between mb-5">
            <h6>Categories</h6>
            <a class="btn btn-sm btn-primary" href="{{ route('admin.cat.create') }}">Add New</a>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cats as $cat)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $cat->name }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{ route('admin.cat.edit', $cat->id) }}">Edit</a>
                        <a class="btn btn-sm btn-danger" href="{{ route('admin.cat.delete', $cat->id)    }}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

@endsection
