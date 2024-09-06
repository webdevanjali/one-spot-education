<!-- 11. resources/views/admin/resource-links/index.blade.php -->

@extends('layouts.admin')

@section('title', 'Resource Links')

@section('content')
    <h1>Resource Links</h1>
    <a href="{{ route('resource-links.create') }}" class="btn btn-primary">Create Resource Link</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>URL</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($links as $link)
                <tr>
                    <td>{{ $link->title }}</td>
                    <td>{{ $link->url }}</td>
                    <td>
                        <a href="{{ route('resource-links.show', $link->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('resource-links.edit', $link->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection