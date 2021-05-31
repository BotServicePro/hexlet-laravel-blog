@extends('layouts.app')


@section('title', 'Create article')


@section('content')
    <div class="container mt-4">
        <h1>Create an article</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{ Form::model($article, ['url' => route('article.store')]) }}
        {{ Form::label('name', 'Article name') }}<br>
        {{ Form::text('name') }}<br><br>
        {{ Form::label('body', 'Article content') }}<br>
        {{ Form::textarea('body', '', ['placeholder' => 'Min 500 chars']) }}<br>
        {{ Form::submit('Create') }}<br>
        {{ Form::close() }}
@endsection
