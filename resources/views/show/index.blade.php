@extends('layouts.app')

@section('title', 'Liste des spectacles')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <table class="table table-bordered table-striped">
   <tr>
    <th>Show</th>
    <th>Déscription</th>
    <th>bookable</th>
    <th>Représentations</th>
    <th>Prix</th>
    <th>Réserver</th>
   </tr>
   @foreach($shows as $row)
   <tr>
    <td>{{$row['title']}}</td>
    <td>{{$row['description']}}</td>
    <td>{{$row['bookable']}}</td>
    <td>{{$row['representations']}}</td>
    <td>{{$row['price']}}€</td>
    <td><a href="{{action('ShowController@edit', $row['id'])}}" class="btn btn-warning">Réserver</a></td>
    <td></td>
   </tr>
   @endforeach
  </table>
 </div>
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
