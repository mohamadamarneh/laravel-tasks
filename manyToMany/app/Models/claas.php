<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class claas extends Model
{
     public function Students()
    {
        return $this->belongsToMany(student::class);
    }
}
