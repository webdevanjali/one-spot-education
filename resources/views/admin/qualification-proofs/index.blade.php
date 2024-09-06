<!-- 19. resources/views/admin/qualification-proofs/index.blade.php -->

@extends('layouts.admin')

@section('title', 'Qualification Proofs')

@section('content')
    <h1>Qualification Proofs</h1>
    <a href="{{ route('qualification-proofs.create') }}" class="btn btn-primary">Upload Qualification Proof</a>
    <table class="table">
        <thead>
            <tr>
                <th>Filename</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proofs as $proof)
                <tr>
                    <td>{{ $proof->filename }}</td>
                    <td>
                        <a href="{{ route('qualification-proofs.show', $proof->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('qualification-proofs.edit', $proof->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
