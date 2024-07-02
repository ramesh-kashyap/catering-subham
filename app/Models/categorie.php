<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;


    protected $fillable = [
        'status','category_name',	
    ];


      public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    } 
}
