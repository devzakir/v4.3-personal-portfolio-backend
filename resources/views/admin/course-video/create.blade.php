@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between align-items-center">
                <h2>Create Course Video</h2>
                <a href="{{ route('course.video.index', ['id' => $section->id]) }}" class="btn btn-primary">Go back to Course Videos</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 offset-3">
                        <form action="{{ route('course.video.store', ['id' => $section->id]) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Video Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Video title">
                            </div>
                            <div class="form-group">
                                <label for="">Video embed code</label>
                                <textarea name="video" id="video" placeholder="enter video embed code" class="form-control" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Video Time</label>
                                <input type="number" step=".01" name="video_time" class="form-control" placeholder="Video time">
                            </div>
                            <div class="form-group">
                                <label for="course">Select Course</label>
                                <select name="course" id="course" class="form-control">
                                    <option value="" selected style="display:none">Select Section</option>
                                    @foreach($courses as $course)
                                    <option value="{{ $course->id }}" @if($course->id == $section->course_id) selected @endif>{{ $course->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="section">Select Section</label>
                                <select name="section" id="section" class="form-control">
                                    <option value="" selected style="display:none">Select Section</option>
                                    @foreach($sections as $courseSection)
                                    <option value="{{ $courseSection->id }}" @if($courseSection->id == $section->id) selected @endif>{{ $courseSection->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="coming_soon" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">Coming Soon</label>
                                </div>
                            </div>
                            <div class="form-group text-center"><button type="submit" class="btn btn-success">Add Course Video</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection