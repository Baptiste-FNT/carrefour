<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $timestamps = false;

    public function categories()
    {
        return $this->belongsTo(CategoriesModel::class, 'nom', 'id');
    }
}
