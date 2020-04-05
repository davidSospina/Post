@extends('layout')

@section('title')
    Posts
@endsection

@section('content')
    <h2>Esta es la pagina</h2>
    <h3>posts</h3>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Url</th>
                <th scope="col">Contenido</th>
                <th scope="col">Posted</th>
                <th scope="col">Categoria</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($posts as $post)
        <tr>
            <th scope="row">{{ $post['id'] }}</th>
            <td>{{ $post['title'] }}</td>
            <td>{{ $post['url'] }}</td>
            <td>{{ $post['content'] }}</td>
            <td>{{ $post['posted'] }}</td>
            <td>{{ $post['category_id'] }}</td>
        </tr>
        @empty
            <p>No hay información para mostrar</p>
        @endforelse
        </tbody>
    </table>
@endsection()
