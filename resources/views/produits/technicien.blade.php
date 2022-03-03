@extends('layout.app')

@section('main')
    <section class="">
        <h2>Voir les Produits</h2>
        <a href="/produits_add" class="create-utilisateur" style="text-decoration:none">Ajouter un produit</a>
        <div class="overflow-scroll">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <td scope="col">#</td>
                        <td scope="col">produit</td>
                        <td scope="col">description</td>
                        <td scope="col">quantite</td>
                        <td scope="col">prix</td>
                        <td scope="col">Création</td>
                        <td scope="col">Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">''</td>
                        <td scope="col">a</td>
                        <td scope="col">a</td>
                        <td scope="col">a</td>
                        <td scope="col">a</td>
                        <td scope="col">a</td>
                        <td>
                            <a href="./crudUtilisateur/update.php?id=" class="edit"><i
                                    class="bi bi-pen-fill"></i></i></a>
                            <a href="crudUtilisateur/delete.php?id=" class="trash"><i
                                    class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
