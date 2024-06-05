@extends('layouts.app')

@section('content')
    <h1>Daftar Buku</h1>
    <a href="{{ route('books.create') }}">Tambah Buku</a>
    <ul>
        @foreach($books as $book)
            <li>
                {{ $book->title }} - {{ $book->author->name }}
                <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
