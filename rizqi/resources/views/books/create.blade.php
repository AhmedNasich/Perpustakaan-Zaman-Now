@extends('layouts.app')

@section('content')
    <h1>Tambah Buku</h1>

    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Judul:</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" id="isbn">
        <br>
        <label for="description">Deskripsi:</label>
        <textarea name="description" id="description"></textarea>
        <br>
        <label for="author_id">Penulis:</label>
        <select name="author_id" id="author_id">
            @foreach($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="publisher_id">Penerbit:</label>
        <select name="publisher_id" id="publisher_id">
            @foreach($publishers as $publisher)
                <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="ebook">E-Book:</label>
        <input type="file" name="ebook" id="ebook">
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection
