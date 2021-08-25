<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paiement extends Model
{
    use HasFactory;
    protected $table="paiements";

    public function user(){
        return $this->belongsTo(user::class, "user_id","id");
    }

    public function stagiaire(){
        return $this->belongsTo(stagiaire::class, "stagiaires_id","id");
    }
}
