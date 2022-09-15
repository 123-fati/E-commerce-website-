<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class objet extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'categorie',
        'status',
        'image',
        'etat',
        'remember_token',
        'created_at',
        'updated_at'
    ];





}

