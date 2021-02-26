<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [ "name", "user_id" ];

    //Relación 1 a muchos inversa
    public function user(){
        return $this->belongsTo("App\Models\User");
    }
}
