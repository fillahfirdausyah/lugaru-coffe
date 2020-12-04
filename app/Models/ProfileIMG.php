<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileIMG extends Model
{
    use HasFactory;

    protected $table = "profileimage";
    protected $fillable = ['image'];
}
