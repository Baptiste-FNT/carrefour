<!-- Button trigger modal -->
@if (isset($produit))
    <button type="button" class="btn btn-primary rounded" data-bs-toggle="modal"
        data-bs-target="#produitsModal{{ $produit->id }}">
        <i class="bi bi-pen-fill"></i>
    </button>
@else
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#produitsModal">
        Ajout d'un nouveau produits
    </button>
@endif

<!-- Modal -->
<div class="modal fade" id="produitsModal{{ isset($produit) ? $produit->id : '' }}" tabindex="-1"
    aria-labelledby="produitsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="produitsModalLabel">Carrefour Stock : <br> Ajout de produits</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/produits/{{ isset($produit) ? $produit->id : '' }}" method="post">
                    @csrf
                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">Produits</p>
                    </div>



                    <div class="d-flex justify-content-between align-items-center">
                        <!-- produit input -->
                        <div class="form-outline mb-4">
                            <label class="form-label required">produit</label>

                            <input type="text" name="produit" class="form-control form-control-lg" placeholder="produit"
                                value="{{ isset($produit) ? $produit->produit : '' }}" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- description input -->
                        <div class="form-outline mb-4">
                            <label class="form-label required">description</label>
                            <textarea type="text" name="description" id="description"
                                class="form-control form-control-lg" rows="4"
                                cols="80">{{ isset($produit) ? $produit->description : '' }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">

                        <h6 class="mb-2 pb-1">categorie: </h6>
                        @if (isset($categories))
                            @foreach ($categories as $categorie)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="{{ $categorie->id }}" value="{{ $categorie->id }}" checked />
                                    <label class="form-check-label"
                                        for="{{ $categorie->slug }}">{{ $categorie->nom }}</label>
                                </div>
                            @endforeach

                        @endif

                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- quantite input -->
                        <div class="form-outline mb-4">
                            <label class="form-label required">quantite</label>

                            <input type="text" name="quantite" class="form-control form-control-lg"
                                placeholder="quantite" value="{{ isset($produit) ? $produit->quantite : '' }}" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- description input -->
                        <div class="form-outline mb-4">
                            <label class="form-label required">prix</label>

                            <input type="text" name="prix" class="form-control form-control-lg" placeholder="prix"
                                value="{{ isset($produit) ? $produit->prix : '' }}" />
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Ajouter">
                </form>
                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>
