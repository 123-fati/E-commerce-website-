<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_client',
        'id_annonce',
        'id_partenaire',
        'periode',
        'date_reservation',
        'created_at',
        'updated_at'

    ];

    
    public $timestamps= false;
    protected $dates=['updated_at','created_at'];

    public function user(){
        return $this->belongsTo(User::class,'id_client');
    }
    public function objet(){
        return $this->belongsTo(objet::class,'id_annonce');
    }
   
   public function partenaire(){
        return $this->belongsTo(User::class,'id_partenaire');
    }
   


}
