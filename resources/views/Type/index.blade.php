@extends('Template.basic')

@section('content')
<section class="types">
  @foreach($tipos as $tipo)
    <a href="{{ route('tipo',['tipo'=>$tipo->id]) }}">
      <article class="type" style="background-color:{{ $tipo->color }}">
        <h3>{{ $tipo->name }}</h3>
      </article>
    </a>
  @endforeach
</section>
@endsection