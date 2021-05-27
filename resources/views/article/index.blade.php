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
                    @foreach ($allArticles as $oneArticle)
                        <tr>
                            <th scope="row">{{ $oneArticle->id }}</th>
                            <td><a href="{{ route('article.show', ['id' => $oneArticle->id]) }}">{{ $oneArticle->name }}</a></td>
                            <td>{{Str::limit($oneArticle->body, 60, ' ...')}}</td>
                            <td>{{ $oneArticle->likes_count }}</td>
                            <td>{{ $oneArticle->created_at }}</td>
                            <td>{{ $oneArticle->updated_at }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        {{ $allArticles->links() }}
        <br>
    @else
        @if(count($foundArticles) !== 0)
            <h3>Found articles: {{ count($foundArticles) }}</h3>
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
                        @foreach ($foundArticles as $oneArticle)
                            <tr>
                                <th scope="row">{{ $oneArticle->id }}</th>
                                <td><a href="{{ route('article.show', ['id' => $oneArticle->id]) }}">{{ $oneArticle->name }}</a></td>
                                <td>{{Str::limit($oneArticle->body, 60, ' ...')}}</td>
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
            </div>
</div>
@endsection
