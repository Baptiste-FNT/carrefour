@extends('layout.app')

@section('main')
    <section class="">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ajout d'une catégories
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Carrefour Stock : <br> Ajout de Categories</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/categories" method="post">
                            @csrf
                            <div class="divider d-flex align-items-center my-4">
                                <p class="text-center fw-bold mx-3 mb-0">S'inscrire</p>
                            </div>


                            <div class="d-flex justify-content-between align-items-center">
                                <!-- nom input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label required">Nom</label>
                                    <input type="text" name="nom" class="form-control form-control-lg" placeholder="Nom" />

                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- description input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label required">description</label>
                                    <textarea type="text" name="description" id="description" class="form-control form-control-lg" rows="4"
                                        cols="80"></textarea>
                                </div>
                            </div>
                            
                            <input type="submit"class="btn btn-primary" value="Ajouter"> 
                        </form>
                        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
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
                                <a href="./crudUtilisateur/update.php?id=" class="edit"><i
                                        class="bi bi-pen-fill"></i></i></a>
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
