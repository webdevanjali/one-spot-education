<!-- 14. resources/views/admin/resource-links/show.blade.php -->

@extends('layouts.admin')

@section('title', 'Show Resource Link')

@section('content')
    <h1>{{ $link->title }}</h1>
    <p><a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a></p>
    <a href="{{ route('resource-links.index') }}" class="btn btn-secondary">Back to Resource Links</a>
@endsection
