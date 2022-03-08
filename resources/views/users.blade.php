@extends('layout.app')

@section('main')
    <section class="">
        <h2>Voir les utilisateurs</h2>
    </section>

        @includeWhen($isAdmin, 'components.form-user')
        @include('components.table-users')

@endsection
