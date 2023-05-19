<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camion extends Model
{
    use HasFactory;
    public function trasporte(){
        return $this->belongsTo(trasnporte::class,'codigo_trasporte');
    }
}
