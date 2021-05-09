@extends('layouts.master')
@section('title', 'File Upload Page')
@section('content')
    <div class="container">
        <div class="row">
            <div class=".col-md-6">
                <div class="card">
                    <div class="card-header">File Upload</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('upload.uploadfile')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="file">Choose File</label>
                                <input type="file" class="form-control" name="file" id="file">
                            </div>
                            <button type="submit" class="btn btn-success">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection