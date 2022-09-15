<?php

namespace App\Models;

use App\Models\User;
use illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;

    protected $fillable = [
       'id',
        'contenu',
        'sujet',
        'userId',
         'status',
          'created_at',
          'actif',
          'read_at',
          'updated_at'
    ];

   public $timestamps= false;
    protected $dates=['read_at','updated_at','created_at'];

   public function from(){
    	return $this->belongsTo(User::class , 'userId');
    }
}
