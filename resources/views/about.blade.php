<!-- resources/views/about.blade.php -->

<h1>О блоге</h1>
<p>Эксперименты с Laravel на Хекслете </p>
<p>{{ implode(', ', $tags) }}</p>


{{-- Это общие директивы для шаблонизатора blade --}}
{{-- @if (count($records) === 1) --}}
{{--    I have one record! --}}
{{-- @endif --}}

{{-- @foreach ($users as $user) --}}
{{--    <p>This is user {{ $user->id }}</p> --}}
{{--    @endforeach --}}
