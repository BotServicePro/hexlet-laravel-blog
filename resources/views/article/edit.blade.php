@extends('layouts.app')


@section('title', 'Edit article')


@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::model($article, ['url' => route('article.update', $article->id), 'method' => 'PATCH']) }}
    {{ Form::label('name', 'Article name') }}<br>
    {{ Form::text('name') }}<br><br>
    {{ Form::label('body', 'Article content') }}<br>
    {{ Form::textarea('body', $article->body) }}<br>
    {{ Form::label('body', 'Likes count') }}<br>
    {{ Form::text('likes_count') }}<br><br>
    {{ Form::submit('Update') }}<br>
    {{ Form::close() }}
@endsection
