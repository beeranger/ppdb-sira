<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function forms(){
        return $this->hasMany(Form::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}
