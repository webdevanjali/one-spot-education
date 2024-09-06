<!-- 20. resources/views/admin/qualification-proofs/create.blade.php -->

@extends('layouts.admin')

@section('title', 'Upload Qualification Proof')

@section('content')
    <h1>Upload Qualification Proof</h1>
    <form action="{{ route('qualification-proofs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="file">Select Proof</label>
            <input type="file" id="file" name="file" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload Proof</button>
    </form>
@endsection
