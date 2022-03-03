<?php

namespace App\Http\Controllers;

use App\Models\CategoriesModel;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class CategoriesController extends Controller
{
    //
    function index()
    {
        $categories = CategoriesModel::get();
        return view('categories', ['categories' => $categories]);
    }
    function add(Request $request)
    {
        $categorie = new CategoriesModel();
        $categorie->nom = $request->nom;
        $categorie->slug = $this->sanitize($request->nom);
        $categorie->description = $request->description;
        $categorie->save();
        return redirect()->route('categories');
    }
    private function sanitize( $string)
    {
        $utf8 = array(
            '/[áàâãªä]/u' => 'a',
            '/[ÁÀÂÃÄ]/u' => 'A',
            '/[ÍÌÎÏ]/u' => 'I',
            '/[íìîï]/u' => 'i',
            '/[éèêë]/u' => 'e',
            '/[ÉÈÊË]/u' => 'E',
            '/[óòôõºö]/u' => 'o',
            '/[ÓÒÔÕÖ]/u' => 'O',
            '/[úùûü]/u' => 'u',
            '/[ÚÙÛÜ]/u' => 'U',
            '/ç/' => 'c',
            '/Ç/' => 'C',
            '/ñ/' => 'n',
            '/Ñ/' => 'N',
            '/ /' => '-'
            );
            return strtolower(preg_replace(array_keys($utf8), array_values($utf8), $string));
        
    }
}
