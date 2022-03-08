@extends('layout.app')

@section('main')
    <section class="">
        @includeWhen($isAdmin, 'components.form-categorie')
        <h2>Voir les Produits</h2>
        <div class="overflow-auto row">
            @foreach ($categories as $categorie)
                <div class="card col-4 m-auto mb-3" style="width:18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/categories/{{ $categorie->id }}">
                                {{ $categorie->nom }}
                            </a>
                        </h5>
                        <p class="card-text">
                            {{ $categorie->description }}
                        </p>
                    </div>
                    @if ($isAdmin)
                        <div class="card-footer">
                            @include('components.form-categorie', [
                                'categorie' => $categorie,
                            ])
                        </div>
                    @endif

                </div>
            @endforeach
        </div>
    </section>
@endsection
