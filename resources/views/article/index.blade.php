@extends('layouts.app')


@section('title', 'Articles')


@section('content')
<div class="container mt-4">
    <h1>Articles</h1>
        {{Form::open(['url' => route('article.index'), 'method' => 'GET'])}}
            {{Form::text('search', $input)}}
            {{Form::submit('Search!')}}
        {{Form::close()}}

        @if(empty($foundArticles))
        <table style="width:100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Body</th>
                <th>Likes</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
            @foreach ($allArticles as $oneArticle)
                <tr>
                    <td>{{ $oneArticle->id }}</td>
                    <td><a href="{{ route('article.show', ['id' => $oneArticle->id]) }}">{{ $oneArticle->name }}</a></td>
                    <td>{{Str::limit($oneArticle->body, 200, ' ...')}}</td>
                    <td>{{ $oneArticle->likes_count }}</td>
                    <td>{{ $oneArticle->created_at }}</td>
                    <td>{{ $oneArticle->updated_at }}</td>
                </tr>
            @endforeach
        </table>
        {{ $allArticles->links() }}
        <br>
            @else
            @if(count($foundArticles) !== 0)
        <h2>Found articles: {{ count($foundArticles) }}</h2>
        <table style="width:100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Body</th>
                <th>Likes</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
            @foreach ($foundArticles as $oneArticle)
                <tr>
                    <td>{{ $oneArticle->id }}</td>
                    <td><a href="{{ route('article.show', ['id' => $oneArticle->id]) }}">{{ $oneArticle->name }}</a></td>
                    <td>{{Str::limit($oneArticle->body, 200, ' ...')}}</td>
                    <td>{{ $oneArticle->likes_count }}</td>
                    <td>{{ $oneArticle->created_at }}</td>
                    <td>{{ $oneArticle->updated_at }}</td>
                </tr>
            @endforeach
            @else
                <h2>Found articles: {{ count($foundArticles) }}</h2>
            @endif
        </table>
        <br>
        @endif
</div>
@endsection
