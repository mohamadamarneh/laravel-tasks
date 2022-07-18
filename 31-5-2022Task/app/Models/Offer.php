<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $table = 'techers';
    protected $fillable = ['id', 'name', 'age'];
    protected $hidden = ['id'];
}
