<!-- Button trigger modal -->
<button type="button" class="btn btn-primary rounded" data-bs-toggle="modal"
    data-bs-target="#produitsModal{{ $produit->id }}">
    <i class="bi bi-pen-fill"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="produitsModal{{ isset($produit) ? $produit->id : '' }}" tabindex="-1"
    aria-labelledby="produitsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="produitsModalLabel">Carrefour Stock : <br> Modification du stocks :
                    {{ $produit->produit }} </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/produits/stocks/{{ isset($produit) ? $produit->id : '' }}" method="post">
                    @csrf

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- quantite input -->
                        <div class="form-outline mb-4">
                            <label class="form-label required">quantite</label>

                            <input type="text" name="quantite" class="form-control form-control-lg"
                                placeholder="quantite" value="{{ isset($produit) ? $produit->quantite : '' }}" />
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Ajouter">
                </form>
            </div>
        </div>
    </div>
</div>
