
<!-- 22. resources/views/admin/qualification-proofs/show.blade.php -->

@extends('layouts.admin')

@section('title', 'Show Qualification Proof')

@section('content')
    <h1>{{ $proof->filename }}</h1>
    <p><a href="{{ asset('storage/' . $proof->path) }}" target="_blank">Download Proof</a></p>
    <a href="{{ route('qualification-proofs.index') }}" class="btn btn-secondary">Back to Qualification Proofs</a>
@endsection
