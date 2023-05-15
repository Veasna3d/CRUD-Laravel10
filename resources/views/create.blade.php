@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="d-flex justify-content-between card-header">
                    <h4>Student List</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('student.store') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">

                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Class</label>
                            <input type="text" name="class" class="form-control @error('class') is-invalid @enderror">

                            @error('class')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Gender</label>
                           <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                           </select>

                           @error('gender')
                           <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
