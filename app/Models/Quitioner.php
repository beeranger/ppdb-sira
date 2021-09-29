<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quitioner extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    protected $with =['user'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function form(){
        return $this->belongsTo(Form::class);
    }
}
