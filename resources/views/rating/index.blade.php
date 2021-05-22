@extends('layouts.app')


@section('title', 'Articles rating')

@section('content')
    <div class="container mt-4">
        <h1>Top 5 articles</h1>

        <table style="width:100%">
            <tr>
                <th>Name</th>
                <th>Likes</th>

            </tr>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->name }}</a></td>
                    <td>{{ $article->likes_count }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
