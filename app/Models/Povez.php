<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Povez extends Model
{
    use HasFactory;

    protected $table = 'povez';

    public function knjiga(){
        return $this->belongsTo(Knjiga::class);
    }


}
