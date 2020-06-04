
@extends('layouts.app')

@section('title', 'Liste des spectacles')

@section('content')


    <div class="container">
         <h2>Rechercher un spectacle</h2>
         <input class="form-control" id="myInput" type="text" placeholder="Search..">
         <br>
      <table id="show" class="table table-bordered table-striped">
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
        <tbody >
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
        <td>
           <!--  @if(Auth::check())
               <a href="{{ route('checkout.index') }}" class="btn btn-warning">Réserver</a>-->
            <form action="{{ route('cart.store') }}" method= "POST">
                @csrf
                <input type="hidden" name="show_id" value="{{$show->id}}">            
                <button type="submit" class="btn btn-warning"> Ajouter au panier</button>
            </form>
           <!--  @else
                <a onclick="alert('Veuillez vous connecter')" href="#" class="btn btn-warning">Réserver</a>
            @endif-->
        </td>
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
