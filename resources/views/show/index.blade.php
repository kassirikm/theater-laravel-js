@extends('layouts.app')

@section('title', 'Liste des spectacles')

@section('content')

    <div class="container">
         <h2>Rechercher un spectacle</h2>
         <input class="form-control" id="myInput" type="text" placeholder="Search..">
         <br>
      <table class="table table-bordered table-striped">
          <h1>Liste des {{ $resource }}</h1>
          <thead>
          <tr>
            <th>Spectacle</th>
            <th>Description</th>
            <th>Représentations</th>
            <th>Prix</th>
            <th>Réserver</th>
          </tr>
          </thead>
        <tbody id="show">
       @foreach($shows as $show)
       <tr>
        <td>{{$show->title}}</td>
        <td>{{$show['description']}}</td>
        <td>
            @if($show->representations->count()==1)
            <span>1 représentation</span>
            @elseif($show->representations->count()>1)
            <span>{{ $show->representations->count() }} représentations</span>
            @else
            <em>aucune représentation</em>
            @endif
        </td>
        <td>{{$show['price']}}€</td>
        <!-- {{ route('checkout.index') }} : aller vers la page de paiement -->
        <!-- action('ShowController@edit', $row['id']) -->
        <td><a href="{{ route('checkout.index') }}" class="btn btn-warning">Réserver</a></td>
        <td></td>
       </tr>
       @endforeach
        </tbody>
      </table>
     </div>


<!--
    <table id="show_id" class="display">
    <h1>Liste des {{ $resource }}</h1>
    <ul>
        @foreach($shows as $show)
            <li>
                {{ $show->title }}
                @if($show->bookable)
                    <span>{{ $show->price }} €</span>
                @endif
                
                @if($show->representations->count()==1)
                - <span>1 représentation</span>
                @elseif($show->representations->count()>1)
                - <span>{{ $show->representations->count() }} représentations</span>
                @else
                - <em>aucune représentation</em>
                @endif

            </li>
        @endforeach
    </ul>
   </table>-->
@endsection
