<!-- Хранится в resources/views/about.blade.php -->

@extends('layouts.app')

<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'About')

@section('header')
    <h1>Хедер</h1>
    <p>Пару ссылок</p>
@endsection

<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')
    <h2>О блоге</h2>
    <p>Эксперименты с Laravel на Хекслете!</p>
    <p> {{ implode(', ', $tags) }} </p> {{-- - тут доступ к переменной tags из массива данных переданных из обработчика--}}
@endsection



{{-- Это общие директивы для шаблонизатора blade --}}
{{-- @if (count($records) === 1) --}}
{{--    I have one record! --}}
{{-- @endif --}}

{{-- @foreach ($users as $user) --}}
{{--    <p>This is user {{ $user->id }}</p> --}}
{{--    @endforeach --}}

{{-- @if (count($records) === 1) --}}
{{--     I have one record! --}}
{{-- @elseif (count($records) > 1) --}}
{{--     I have multiple records! --}}
{{-- @else --}}
{{--     I don't have any records! --}}
{{-- @endif --}}

{{-- @isset($records) --}}
{{--     // Переменная $records определена и не равна `null` ... --}}
{{-- @endisset --}}

{{-- @empty($records) --}}
{{--     // Переменная $records считается «пустой» ... --}}
{{-- @endempty --}}

{{-- @switch($i) --}}
{{--     @case(1) --}}
{{--     First case... --}}
{{--     @break --}}

{{--     @case(2) --}}
{{--     Second case... --}}
{{--     @break --}}

{{--     @default --}}
{{--     Default case... --}}
{{-- @endswitch --}}
