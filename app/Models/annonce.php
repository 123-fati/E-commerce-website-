<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annonce extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'typeAnn',
        'prix',
        'ville',
        'periode',
        'id_partenaire',
        'categorie_objet',
        'nom_objet',
        'statut',
        'image',
        'etat_objet',
        'created_at',
        'updated_at'

    ];

    public function objet(){
        return $this->belongsTo(objet::class , 'id_object');
    }

    public function createAdd(){
        
    }

}
