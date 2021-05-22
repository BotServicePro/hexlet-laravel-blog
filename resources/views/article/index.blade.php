@extends('layouts.app')


@section('title', 'Articles')


@section('content')
<div class="container mt-4">
    <h1>Articles</h1>

    <table style="width:100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Body</th>
            <th>Likes</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
{{--                <td><a href="{{ route('show.url', ['id' => $url->id]) }}">{{ $url->name }}</a></td>--}}
                <td>{{ $article->name }}</td>
                <td>{{Str::limit($article->body, 200, ' ...')}}</td>
                <td>{{ $article->likes_count }}</td>
                <td>{{ $article->created_at }}</td>
                <td>{{ $article->updated_at }}</td>
            </tr>
        @endforeach
    </table>
    <br>
    {{ $articles->links() }}
</div>
@endsection
