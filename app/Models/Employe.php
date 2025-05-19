<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Employe extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule', 'nom', 'prenom', 'email', 'telephone', 'code_dep'
    ];

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
}

