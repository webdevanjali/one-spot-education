<!-- 21. resources/views/admin/qualification-proofs/edit.blade.php -->

@extends('layouts.admin')

@section('title', 'Edit Qualification Proof')

@section('content')
    <h1>Edit Qualification Proof</h1>
    <form action="{{ route('qualification-proofs.update', $proof->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="file">Select New Proof (optional)</label>
            <input type="file" id="file" name="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update Proof</button>
    </form>
@endsection
