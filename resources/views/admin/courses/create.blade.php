@extends('admin.layout')

@section('content')

    <div class="d-flex justify-content-between mb-3">
        <h6>Courses / Add new</h6>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.courses.index') }}">Back</a>
    </div>

    @include('admin.inc.errors')

    <form method="POST" action="{{ route('admin.courses.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <select class="form-control mt-3 mb-3" name="cat_id">
                <option>Please Select Category</option>
                @foreach($cats as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-control mt-3 mb-3" name="trainer_id">
                <option>Please Select Trainer</option>
                @foreach($trainers as $trainer)
                    <option value="{{ $trainer->id }}">{{ $trainer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Small Desc</label>
            <input type="text" name="small_desc" class="form-control">
        </div>
        <div class="form-group">
            <label>Desc</label>
            <textarea type="text" name="desc" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label>Img</label>
            <input type="file" name="img" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-5">Submit</button>
    </form>

@endsection
