<!-- Хранится в resources/views/about.blade.php -->

@extends('layouts.app')

<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'О блоге')

<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')
    <h1>О блоге</h1>
    <p>Эксперименты с Laravel на Хекслете</p>
@endsection

<p>{{ implode(', ', $tags) }}</p>







{{-- Это общие директивы для шаблонизатора blade --}}
{{-- @if (count($records) === 1) --}}
{{--    I have one record! --}}
{{-- @endif --}}

{{-- @foreach ($users as $user) --}}
{{--    <p>This is user {{ $user->id }}</p> --}}
{{--    @endforeach --}}
