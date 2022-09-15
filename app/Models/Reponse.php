<?php

namespace App\Models;

use App\Models\Reclamation;
use App\Models\User;
use illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reponse extends Model
{
	 protected $fillable = [
        'reclamationId',
        'from_id',
         'content',
          'created_at',
          'actif',
          'uptaded_at'
    ];

   public $timestamps= false;
    protected $dates=['uptaded_at','created_at'];

   public function from(){
    	return $this->belongsTo(User::class , 'from_id');
    }

    }
