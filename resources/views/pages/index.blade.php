@extends('layouts.app')

@section('content')

    <!-- Theater main image -->
<br><br>
<div class="jumbotron jumbotron-fluid" style="background-image: url('images/National_Theatre_banner.jpg');background-size:100%;">
    <div class="container">
        <h1 class="display-4" style="text-center; color:white;">Théatre National</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>

<body>
<div class="container">
  <div class="row mb-2">
    @foreach($shows as $show)
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">{{ $show->title }}</h3>
          <!-- <div class="mb-1 text-muted">{{ $show->created_at->format('d/m/Y') }}</div> -->
          <p class="card-text mb-auto"></p>
          <p class="mb-auto"><strong>{{ $show->price }} €</strong></p>
          <a href="{{ route('shows.show', $show->id) }}" class="stretched-link">Détails</a>
        </div>
          <div class="col-auto d-none d-lg-block"><img src="{{ asset('images/'.$show->poster_url) }}" width="200" height="250"></div>
      </div>
    </div>
    @endforeach
  </div>
</div>

</body>
@endsection
