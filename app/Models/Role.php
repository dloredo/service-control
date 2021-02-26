<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [ "name" ];

    //Relación 1 a muchos
    public function users(){
        return $this->hasMany("App\Models\User");
    }


}
