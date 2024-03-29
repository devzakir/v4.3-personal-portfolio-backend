@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between align-items-center">
                <h2>All Testimonial List</h2>
                <a href="{{ route('testimonial.create') }}" class="btn btn-primary">Create Testimonial</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Description</th>
                            <th style="width:150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($testimonials->count() > 0)
                        @foreach($testimonials as $t)
                        <tr>
                            <td>{{$t->id}}</td>
                            <td>
                                <div style="max-height:60px; max-width:60px; overflow:hidden">
                                    <img src="{{ asset($t->avatar) }}" alt="" class="img-fluid">
                                </div>
                            </td>
                            <td>{{$t->name}}</td>
                            <td>{{$t->designation}}</td>
                            <td>{{$t->description}}</td>
                            <td class="d-flex" style="width:150px">
                                <a href="{{ route('testimonial.edit', $t->id) }}" class="btn btn-success btn-sm"> <span
                                        class="mdi mdi-square-edit-outline"></span> </a>
                                <a href="#" class="btn btn-primary btn-sm ml-1"> <span class="mdi mdi-eye"></span> </a>
                                <form action="{{ route('testimonial.destroy', $t->id) }}" method="post" class="ml-1">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"> <span
                                            class="mdi mdi-delete"></span> </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="6">
                                <h5 class="text-center pt-4 pb-4">No testimonials found</h5>
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