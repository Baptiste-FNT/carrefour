<div class="overflow-scroll">
    <table class="table table-hover ">
        <thead>
            <tr>
                <td scope="col">#</td>
                <td scope="col">produit</td>
                <td scope="col">description</td>
                <td scope="col">quantite</td>
                <td scope="col">prix</td>
                @if (isset($categories))
                <td scope="col">categorie</td>
                @endif
                
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
                <tr>
                    <td scope="col">{{ $produit->id }}</td>
                    <td scope="col">
                       
                            {{ $produit->produit }}
                        
                    </td>

                    <td scope="col">
                        {{ $produit->description }}
                    </td>
                    <td scope="col">
                        {{ $produit->quantite }}
                    </td>
                    <td scope="col">
                        {{ $produit->prix }}
                    </td>
                @if (isset($categories))
                    <td scope="col">
                        <a href="/categories/{{ $produit->categorie->id }}">
                            {{ $produit->categorie->nom }}
                        </a>
                    </td>
                @endif
                    
                    <td class="d-flex">
                        @includeUnless($isAdmin, 'components.form-produitsStock', [
                        'produit' => $produit,
                        ])
                        @includeWhen($isAdmin, 'components.form-produits', [
                        'produit' => $produit,
                        ])
                        @includeWhen($isAdmin, 'components.delete-produits', [
                        'id' => $produit->id,
                        ])
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
