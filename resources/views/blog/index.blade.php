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
                    <form action="{{ route ('blog.delete', $row['id'])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin?')">DELETE</button>
                        <a href="{{ route ('blog.edit', $row['id'])}}" class="btn btn-warning btn-sm">EDIT</a>
                    </form>                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
