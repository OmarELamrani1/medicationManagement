<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'quantite',
        'categorie_id'
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
