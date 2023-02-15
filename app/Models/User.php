<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
   /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
   protected $fillable = [
      'name',
      'surname',
      'email',
      'password',
   ];
   public function cart()
   {
      return $this->hasOne(Cart::class);
   }
   public function order()
   {
      return $this->hasMany(Order::class)->withTimestamps();
   }
   public function adress()
   {
      return $this->hasMany(Adress::class)->withTimestamps();
   }
}
 // use HasApiTokens, HasFactory, Notifiable;

    

    // /**
    //  * The attributes that should be hidden for serialization.
    //  *
    //  * @var array<int, string>
    //  */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    //     'points'
    // ];