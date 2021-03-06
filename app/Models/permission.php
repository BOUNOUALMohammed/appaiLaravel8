<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    use HasFactory;
    protected $table="permissions";

    public function users(){
        return $this->BelongsToMany(role::class,"user_permission","permissions_id","user_id");
    }
}
