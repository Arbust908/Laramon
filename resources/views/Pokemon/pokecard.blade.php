<a href="{{ route('pokemon.uno',['pokemon' => $poke->id]) }}">
  <article class="poke {{ $tipo->name }}">
  <img src="{{ asset('poke-img/images/poke-'.$poke->id.'.jpg') }}" alt="Icono de {{ $poke->name }}">
    <h3>{{ $poke->name }}</h3>
    <h4>{{ $poke->weight }}</h4>
    <h4>{{ $poke->height }}</h4>
    <h4>{{ $poke->evolves }}</h4>
  </article>
</a>