<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduitsModel extends Model
{
    use HasFactory;
    protected $table = 'produits';

    public function categorie()
    {
        return $this->belongsTo(CategoriesModel::class, 'categorie_id');
    }
}
