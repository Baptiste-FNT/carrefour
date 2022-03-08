@extends('layout.app')

@section('main')
    <h1>{{ $categorie->nom }}</h1>
    <h4>{{ $categorie->description }}</h4>
    @include('components.table-produits', ['produits'=> $categorie->produits])
@endsection
