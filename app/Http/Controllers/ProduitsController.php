<?php

namespace App\Http\Controllers;

use App\Models\CategoriesModel;
use App\Models\ProduitsModel;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    //
    function index(Request $request)
    {
        $produits = ProduitsModel::with('categorie')->get();
        $categories = CategoriesModel::get();
        return view('produits', [
            'produits' => $produits,
            'categories' => $categories,
            'isAdmin' => $request->isAdmin
        ]);
    }
    function add(Request $request)
    {

        $produits = new ProduitsModel();
        $produits->produit = $request->produit;
        $produits->description = $request->description;
        $produits->quantite = $request->quantite;
        $produits->prix = $request->prix;
        $produits->categorie_id = $request->inlineRadioOptions;
        $produits->save();
        return redirect()->back();
    }

    function update(Request $request, $id)
    {
        $produit = ProduitsModel::find($id);
        if (isset($produit)) {
            $produit->produit = $request->produit;
            $produit->description = $request->description;
            $produit->quantite = $request->quantite;
            $produit->prix = $request->prix;
            $produit->categorie_id = $request->inlineRadioOptions;
            $produit->save();
            return redirect()->back();
        }
    }

    function stockUpdate(Request $request, $id)
    {
        
        $produit = ProduitsModel::find($id);
        if (isset($produit)) {
            $produit->quantite = $request->quantite;
            $produit->save();
            return redirect()->back();
        }
    }

    function delete($id)
    {
        ProduitsModel::destroy($id);
        return redirect()->back();
    }
}
