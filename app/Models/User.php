<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function paiements(){
        return $this->hasMany(paiement::class, "paiements_id","id");

    }
    public function roles(){
        return $this->BelongsToMany(role::class,"user_role","user_id","role_id");
    }

    public function permissions(){
        return $this->BelongsToMany(role::class,"user_permission","user_id","permissions_id");
    }

    public function hasRole($role){
        return $this->roles()->where("nom",$role)->first() !==null;

    }

    public function hasAnyRole($role){
        return $this->roles()->whereIn("nom",$role)->first() !==null;

    }




}
