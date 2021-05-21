@extends('layouts.app')

@section('title', 'Main page')

@section('content')
    <b>MAIN PAGE</b>
    <a href="{{ route('page.about') }}">About</a>
@endsection
