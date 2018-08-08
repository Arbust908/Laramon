@extends('Template.basic')

@section('content')
<div class="content">
    <div class="title m-b-md">
        Laramon
    </div>

    <div class="links">
        <a href="{{ url('/') }}">Pokemon</a>
        <a href="{{ route('types') }}">Types</a>
        <a href="http://es.pokemon.wikia.com/wiki/WikiDex">Pokemon Wiki</a>
        <a href="https://github.com/laravel/laravel">Laravel</a>
    </div>
</div>
@endsection