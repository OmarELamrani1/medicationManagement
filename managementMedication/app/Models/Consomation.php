<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consomation extends Model
{
    use HasFactory;
    protected $fillable = ['medicament_id', 'quantite'];

    public function traitement(){
        return $this->hasMany(Medicament::class, 'medicament_id');
    }
}
