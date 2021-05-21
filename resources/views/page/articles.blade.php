@extends('layouts.app')


@section('title', 'Articles')

@section('content')
<div class="container mt-4">
    <h1>Статьи</h1>

    <table style="width:100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Body</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        @foreach ($articlesData as $article)
            <tr>
                <td>{{ $article->id }}</td>
{{--                <td><a href="{{ route('show.url', ['id' => $url->id]) }}">{{ $url->name }}</a></td>--}}
                <td>{{ $article->name }}</a></td>
                <td>{{ $article->body }}</a></td>
                <td>{{ $article->created_at }}</td>
                <td>{{ $article->updated_at }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
