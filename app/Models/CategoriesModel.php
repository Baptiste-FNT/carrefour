<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $timestamps = false;

    public function produits()
    {
        return $this->hasMany(ProduitsModel::class, 'categorie_id');
    }
}
