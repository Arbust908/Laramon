@extends('Template.basic')

@section('content')
<section class="pokemon">
  @foreach($pokemon as $poke)
    <aticle class="poke">
      <h3>{{ $poke->name }}</h3>
      <p>Peso: <strong>{{ $poke->weight }}</strong></p>
      <p>Alto: <strong>{{ $poke->height }}</strong></p>
      <p></p>
    </aticle>
  @endforeach
</section>
@endsection