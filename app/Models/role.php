<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $table="roles";

    public function users(){
        return $this->BelongsToMany(user::class,"user_role","role_id","user_id");
    }



}
