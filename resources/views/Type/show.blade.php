@extends('Template.basic')

@section('content')
<section class="types">
  <a href="{{ url('/type/$type') }}">
    <article class="type {{ $type->name }}">
      <h3>{{ $type->name }}</h3>
    </article>
  </a>
</section>
<section class="pokemon">
  @foreach($pokemon as $poke)
  <a href="{{ url('/') }}">
    <article class="poke {{ $type->name }}">
      <h3>{{ $poke->name }}</h3>
      <h4>{{ $poke->weight }}</h4>
      <h4>{{ $poke->height }}</h4>
      <h4>{{ $poke->evolves }}</h4>
    </article>
  </a>
  @endforeach
</section>
@endsection