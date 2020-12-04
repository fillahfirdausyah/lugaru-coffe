<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileDESC extends Model
{
    use HasFactory;

    protected $table = "profiledescription";
    protected $fillable = ['description'];
}
