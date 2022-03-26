@extends('admin.layout')

@section('content')

    <div class="d-flex justify-content-between mb-5">
        <h6>Student / show courses</h6>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.students.index') }}">Back</a>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                    {{ $course->name }}
                </td>
                @if($course->pivot->status !== 'approve')
                <td class="table-danger">
                    {{ $course->pivot->status }}
                </td>
                @endif
                @if($course->pivot->status !== 'reject')
                    <t  d class="table-info">
                        {{ $course->pivot->status }}
                    </td>
                @endif
                <td>
                    @if($course->pivot->status !== 'approve')
                        <a class="btn btn-sm btn-info" href="{{ route('admin.students.approvecourse', [$student_id, $course->id]) }}">Approve</a>
                    @endif
                    @if($course->pivot->status !== 'reject')
                        <a class="btn btn-sm btn-danger" href="{{ route('admin.students.rejectcourse', [$student_id, $course->id]) }}">Reject</a>
                    @endif
                </td>
                <td></td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
@endsection

