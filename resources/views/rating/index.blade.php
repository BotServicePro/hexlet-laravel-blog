@extends('layouts.app')


@section('title', 'Articles rating')

@section('content')
    <div class="container mt-4">
        <h1>Top 5 articles</h1>
        <div class="mb-5">
            <br>
            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <tr>
                        <th scope="col">Name</th>
                        <th>Likes</th>
                        <th>Created at</th>
                    </tr>
                    @foreach ($articles as $article)

                    <tr>
                        <td><a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a></td>
                        <td>{{ $article->likes_count }}</td>
                        <td>{{ $article->created_at }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
