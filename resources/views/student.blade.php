@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex justify-content-between card-header">
                        <h4>Student List</h4>
                        <a href="{{ route('student.create') }}" class="btn btn-primary">Add New</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>
                                        <form action="{{ route('student.destroy', $student->id) }}" method="post">

                                            <a class="btn btn-info" href="{{ route('student.edit', $student->id) }}">Edit</a>

                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
