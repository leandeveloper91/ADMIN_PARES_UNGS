<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Provider extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'providers';

     // Definir la relación muchos a muchos con Category
     public function categories()
     {
         return $this->belongsToMany(Category::class, 'category_provider');
     }
}
