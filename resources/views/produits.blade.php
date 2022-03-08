@extends('layout.app')

@section('main')
    <section class="">
        @includeWhen($isAdmin, 'components.form-produits')
        <h2>Voir les Produits</h2>
        @include('components.table-produits')
    </section>
@endsection
