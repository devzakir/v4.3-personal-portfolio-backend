@extends('layouts.admin')

@section('content')
<div class="card card-default">
    <div class="card-header card-header-border-bottom d-flex justify-content-between align-items-center">
        <h2>Edit Course Category</h2>
        <a href="{{ route('course-category.index') }}" class="btn btn-primary">Go Back To List</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="{{ route('course-category.update', $category->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $category->name }}" placeholder="Name">
                    </div>
                    <div class="form-group text-center"><button type="submit" class="btn btn-success">Update Category</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
