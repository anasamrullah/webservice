@extends('tmp')

@section('title', 'Tambah Data Blog')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row mt10">
    <div class="col10">
        <div class="card">
            <div class="card-header">Tambah Data Blog
                <a class="btn btn-sm btn-info float-right" href="{{route ('blog.index')}}"><i class="fas fa-backward"></i>Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{route ('blog.store')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="from-group">
                        <label>Author</label>
                        <input type="text" name="author" class="form-control" value="{{old('author')}}">
                    </div>

                    <div class="from-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{old('title')}}">
                    </div>

                    <div class="from-group">
                        <label>Body</label>
                        <input type="text" name="body" class="form-control" value="{{old('body')}}">
                    </div>

                    <div class="from-group">
                        <label>Keyword</label>
                        <input type="text" name="keyword" class="form-control" value="{{old('keyword')}}">
                    </div>

                    <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                    <a class="btn btn-warning float-right" href="{{route('blog.index')}}"><i class="fas fa-backward"></i>Batal</a>

            </div>
        </div>
    </div>
    @endsection