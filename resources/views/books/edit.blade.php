@extends('layouts.app')

@section('content')
    <h1>Edit Buku</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="title">Judul:</label>
        <input type="text" name="title" id="title" value="{{ $book->title }}">
        <br>
        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" id="isbn" value="{{ $book->isbn }}">
        <br>
        <label for="description">Deskripsi:</label>
        <textarea name="description" id="description">{{ $book->description }}</textarea>
        <br>
        <label for="author_id">Penulis:</label>
        <select name="author_id" id="author_id">
            @foreach($authors as $author)
                <option value="{{ $author->id }}" @if($book->author_id == $author->id) selected @endif>{{ $author->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="publisher_id">Penerbit:</label>
        <select name="publisher_id" id="publisher_id">
            @foreach($publishers as $publisher)
                <option value="{{ $publisher->id }}" @if($book->publisher_id == $publisher->id) selected @endif>{{ $publisher->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="ebook">E-Book:</label>
        <input type="file" name="ebook" id="ebook">
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection
