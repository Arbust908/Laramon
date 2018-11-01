@extends('Template.basic')

@section('content')
<section class="types">
  <a href="{{ route('tipo',['tipo' => $tipo->id]) }}">
  <article class="type" style="background-color:{{$tipo->color}}">
      <h3>{{ $tipo->name }}</h3>
    </article>
  </a>
</section>
<section class="pokemon">
  @foreach($tipo->pokemon as $poke)
  <a href="{{ route('pokemon.uno',['pokemon' => $poke->id]) }}">
    <article class="poke {{ $tipo->name }}">
    <img src="{{ asset('poke-img/images/poke-'.$poke->id.'.jpg') }}" alt="Icono de {{ $poke->name }}">
      <h3>{{ $poke->name }}</h3>
      <h4>{{ $poke->weight }}</h4>
      <h4>{{ $poke->height }}</h4>
      <h4>{{ $poke->evolves }}</h4>
    </article>
  </a>
  @endforeach
</section>
@endsection