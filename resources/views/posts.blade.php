@extends('layout')

@section('title')
    Posts
@endsection

@section('content')
    <h2>Esta es la pagina</h2>
    <h3>posts</h3>

    <ul>
        @forelse ($posts as $post)
            <li> {{ $post['title'] }} </li>
        @empty
            <li> No hay información para listar </li>
        @endforelse
    </ul>
@endsection()
