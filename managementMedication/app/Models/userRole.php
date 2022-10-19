<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userRole extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'role_id'
    ];

    public function role(){
        return $this->belongsTo(Role::class, 'role_id');
    }
}