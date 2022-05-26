<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Painting extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function artist(){
        return $this->belongsTo(Artist::class);
    }

}
