<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
     use App\Models\User;
class roles extends Model
{
     protected $fillable = ['nama'];



     public function users()
     {
     return $this->hasMany(User::class);
     }
}

