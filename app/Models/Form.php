<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    protected $with =['user','unit'];

    public function formulirID()
   {
       if ($this->unit_id==2){
           return sprintf('SMP-%04d', $this->id);
        }else{            
            return sprintf('SD-%04d', $this->id);
       }
   }

    public function unit(){
        return $this->belongsTo(Unit::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function photo(){
        return $this->hasOne(Photo::class);
    }

    public function status()
   {
       if ($this->is_verified){
           return sprintf('Sudah terverifikasi');
        }else{            
            return sprintf('Belum diverifikasi');
       }
   }

}
