@extends('layout.app')

@section('main')
    <section class="">
        @include('components.form-categorie')
        <h2>Voir les Produits</h2>
        <div class="overflow-scroll">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <td scope="col">#</td>
                        <td scope="col">produit</td>
                        <td scope="col">description</td>
                        <td scope="col">description</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $categorie)
                        <tr>
                            <td scope="col">{{ $categorie->id }}</td>
                            <td scope="col">
                                <a href="/categories/{{ $categorie->id }}">
                                    {{ $categorie->nom }}
                                </a>
                            </td>

                            <td scope="col">
                                {{ $categorie->description }}
                            </td>
                            <td>

                                @include('components.form-categorie',['categorie'=>$categorie])

                                <a href="crudUtilisateur/delete.php?id=" class="trash"><i
                                        class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
