<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class std extends Model
{
    use HasFactory;
    protected $table="stds";
    protected $fillable=['fname','lname'];
}
