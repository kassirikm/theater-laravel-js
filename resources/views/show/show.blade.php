@extends('layouts.app')

@section('title', 'Fiche d\'un spectacle')

@section('content')

<div class="container">
  <div class="row mb-2">
    <div class="col-md-12">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">{{ $show->title }}</h3>
            <p class="card-text mb-auto"></p>
            <!-- Location -->
            @if($show->location)
                <p><strong>Lieu de création:</strong> {{ $show->location->designation }}</p>
            @endif
            
            <!-- Réservable -->
            @if($show->bookable)
                <p><em>Réservable</em></p>
            @else
                <p><em>Non réservable</em></p>
            @endif
            <p class="mb-auto"><strong>{{ $show->price }} €</strong></p>
            
            <br>
            <h1>Résumé</h1>
            <p>{{ $show->description }}</p>
            <!-- Représentations -->
            <br>
            <h2>Liste des représentations</h2>
                
                @if($show->representations->count()>=1)
                    @foreach ($show->representations as $representation)
                    <div class="alert alert-dark" role="alert">{{ $representation->when }}</div>
                    @endforeach
                @else
                <div class="alert alert-dark" role="alert"><p>Aucune représentation</p></div>
                @endif
            
            <!-- Artistes -->
            <h2>Distribution</h2>
            <p><strong>Auteur:</strong>
            @foreach ($collaborateurs['auteur'] as $auteur)
                {{ $auteur->firstname }} 
                {{ $auteur->lastname }}@if($loop->iteration == $loop->count-1) et 
                @elseif(!$loop->last), @endif
            @endforeach
            </p>
            <p><strong>Metteur en scène:</strong>
            @foreach ($collaborateurs['scénographe'] as $scenographe)
                {{ $scenographe->firstname }} 
                {{ $scenographe->lastname }}@if($loop->iteration == $loop->count-1) et 
                @elseif(!$loop->last), @endif
            @endforeach
            </p>
            <p><strong>Distribution:</strong>
            @foreach ($collaborateurs['comédien'] as $comedien)
                {{ $comedien->firstname }} 
                {{ $comedien->lastname }}@if($loop->iteration == $loop->count-1) et 
                @elseif(!$loop->last), @endif
            @endforeach
            </p>
        </div>
          
            <div class="col-auto d-none d-lg-block">
            @if($show->poster_url)
                <img src="{{ asset('images/'.$show->poster_url) }}" width="200" height="250">
            @else
                <canvas width="200" height="250" style="border:1px solid #000000;"></canvas>
            @endif
            
            @if($show->location)
                <p><strong>Lieu de création:</strong> {{ $show->location->designation }}</p>
            @endif
            </div>
            
          
      </div>
    </div>
  </div>
</div>


<!-- Code du prof -->
<!--
<article>
        <h1>{{ $show->title }}</h1>

        @if($show->poster_url)
            <p><img src="{{ asset('images/'.$show->poster_url) }}" alt="{{ $show->title }}" width="200"></p>
        @else
            <canvas width="200" height="100" style="border:1px solid #000000;"></canvas>
        @endif

        @if($show->location)
            <p><strong>Lieu de création:</strong> {{ $show->location->designation }}</p>
        @endif

        <p><strong>Prix:</strong> {{ $show->price }} €</p>

        @if($show->bookable)
            <p><em>Réservable</em></p>
        @else
            <p><em>Non réservable</em></p>
        @endif
        
        <h2>Liste des représentations</h2>
        @if($show->representations->count()>=1)
        <ul>
            @foreach ($show->representations as $representation)
                <li>{{ $representation->when }}</li>              
            @endforeach
        </ul>
        @else
        <p>Aucune représentation</p>
        @endif
        
        <h2>Liste des artistes</h2>
        <p><strong>Auteur:</strong>
        @foreach ($collaborateurs['auteur'] as $auteur)
            {{ $auteur->firstname }} 
            {{ $auteur->lastname }}@if($loop->iteration == $loop->count-1) et 
            @elseif(!$loop->last), @endif
        @endforeach
        </p>
        <p><strong>Metteur en scène:</strong>
        @foreach ($collaborateurs['scénographe'] as $scenographe)
            {{ $scenographe->firstname }} 
            {{ $scenographe->lastname }}@if($loop->iteration == $loop->count-1) et 
            @elseif(!$loop->last), @endif
        @endforeach
        </p>
        <p><strong>Distribution:</strong>
        @foreach ($collaborateurs['comédien'] as $comedien)
            {{ $comedien->firstname }} 
            {{ $comedien->lastname }}@if($loop->iteration == $loop->count-1) et 
            @elseif(!$loop->last), @endif
        @endforeach
        </p>
-->
@endsection
