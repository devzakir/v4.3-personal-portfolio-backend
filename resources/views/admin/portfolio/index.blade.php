@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between align-items-center">
                <h2>All Portfolio List</h2>
                <div>
                    <a href="{{ route('portfolio.create') }}" class="btn btn-primary">Create Portfolio</a>
                    <a class="btn btn-success" href="{{ route('portfolio-category.index') }}"> Portfolio Category </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category Name</th>
                            <th style="width:150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($portfolios->count() > 0)
                        @foreach($portfolios as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>
                                <div style="max-height:60px; max-width:60px; overflow:hidden">
                                    <img src="{{ asset($p->image) }}" alt="" class="img-fluid">
                                </div>
                            </td>
                            <td>{{$p->title}}</td>
                            <td>{{$p->category->name}}</td>
                            <td class="d-flex" style="width:150px">
                                <a href="{{ route('portfolio.edit', $p->id) }}" class="btn btn-success btn-sm"> <span
                                        class="mdi mdi-square-edit-outline"></span> </a>
                                <a href="{{ route('portfolio.show', $p->id) }}" class="btn btn-primary btn-sm ml-1">
                                    <span class="mdi mdi-eye"></span> </a>
                                <form action="{{ route('portfolio.destroy', $p->id) }}" method="post" class="ml-1">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"> <span
                                            class="mdi mdi-delete"></span> </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5">
                                <h5 class="text-center pt-4 pb-4">No Products Found.</h5>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-center">
                {{$portfolios->links()}}
            </div>
        </div>
    </div>
</div>
@endsection