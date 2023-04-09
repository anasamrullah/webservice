@extends('tmp')

@section('title', 'Blog')

@section('content')
    <div class="alert alert-info">Blog</div>

    <a href="{{ route ('blog.create') }}" class="btn btn-success float-end mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Author</th>
                <th>Title</th>
                <th>Body</th>
                <th>Keyword</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blog as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->author }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->body }}</td>
                <td>{{ $row->keyword }}</td>
                <td>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
