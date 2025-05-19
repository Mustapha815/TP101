<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = ['code_dep', 'nom_dep'];

    public function employes()
    {
        return $this->hasMany(Employe::class);
    }
}


