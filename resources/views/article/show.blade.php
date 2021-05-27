@extends('layouts.app')


@section('title', 'Single Article')


@section('content')
    <div class="container mt-4">
        <h1>Article: {{ $article->name }}</h1>
        <div class="mb-5">
            <br>
            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Body</th>
                        <th scope="col">Likes</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                    </tr>
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td>{{ $article->name }}</td>
                        <td>{{ $article->body }}</td>
                        <td>{{ $article->likes_count }}</td>
                        <td>{{ $article->created_at }}</td>
                        <td>{{ $article->updated_at }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
