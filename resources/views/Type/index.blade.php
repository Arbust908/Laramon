@extends('Template.basic')

@section('content')
<section class="types">
  @foreach($types as $types)
    <a href="{{ url('/type/$type') }}">
      <article class="type {{ $type->name }}">
        <h3>{{ $type->name }}</h3>
      </article>
    </a>
  @endforeach
</section>
@endsection