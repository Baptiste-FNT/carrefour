<!-- Button trigger modal -->
@if (isset($categorie))
    <button type="button" class="btn btn-primary rounded" data-bs-toggle="modal" data-bs-target="#exampleModal{{$categorie->id}}">
        <i class="bi bi-pen-fill"></i>
    </button>
@else
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Ajout d'une catégories
    </button>
@endif

<!-- Modal -->
<div class="modal fade" id="exampleModal{{isset($categorie)?$categorie->id:""}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                            <input type="text" name="nom" class="form-control form-control-lg" placeholder="Nom"
                                value="{{isset($categorie)?$categorie->nom:""}}"  />


                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- description input -->
                        <div class="form-outline mb-4">
                            <label class="form-label required">description</label>
                            <textarea type="text" name="description" id="description"
                                class="form-control form-control-lg" rows="4" cols="80"></textarea>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Ajouter">
                </form>
                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>
