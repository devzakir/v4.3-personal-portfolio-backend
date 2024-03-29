@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between align-items-center">
                <h2>All Product Category List</h2>
                <a href="{{ route('product-category.create') }}" class="btn btn-primary">Create a Category</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th style="width:150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($categories->count() > 0)
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td class="d-flex" style="width:150px">
                                <a href="{{ route('product-category.edit', $category->id) }}"
                                    class="btn btn-success btn-sm"> <span class="mdi mdi-square-edit-outline"></span>
                                </a>
                                <a href="#" class="btn btn-primary btn-sm ml-1"> <span class="mdi mdi-eye"></span> </a>
                                <form action="{{ route('product-category.destroy', $category->id) }}" method="post"
                                    class="ml-1">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"> <span
                                            class="mdi mdi-delete"></span> </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="3">
                                <h5 class="text-center pt-4 pb-4">No Categories Found</h5>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection