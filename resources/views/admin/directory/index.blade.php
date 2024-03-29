@extends('layouts.admin')

@section('content')
<div class="card card-default">
    <div class="card-header card-header-border-bottom d-flex justify-content-between align-items-center">
        <h2>Users List</h2>
        <a href="{{ route('user.create') }}" class="btn btn-primary">Create User</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th> # </th>
                            <th> First </th>
                            <th> Last </th>
                            <th style="width: 150px"> Handle </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($users->count())
                        @foreach($users as $user)
                        <tr>
                            <td> 1 </td>
                            <td> Lucia </td>
                            <td> Christ </td>
                            <td style="width: 150px" class="d-flex">
                                <a href="{{ route('user.edit', $user->id) }}" class="mr-1 btn btn-primary btn-sm"> <i class="mdi mdi-square-edit-outline"></i> </a>
                                <a href="{{ route('user.show', $user->id) }}" class="mr-1 btn btn-success btn-sm"> <i class="mdi mdi-eye"></i> </a>
                                <a href="{{ route('user.delete', $user->id) }}" class="btn btn-danger btn-sm"> <i class="mdi mdi-trash-can"></i> </a>
                                <form action="{{ route('course-category.destroy', $category->id) }}" method="post">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"> 
                                        <i class="mdi mdi-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="6">
                                <h5 class="text-center pt-5 pb-5">NO Post Found</h5>
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
