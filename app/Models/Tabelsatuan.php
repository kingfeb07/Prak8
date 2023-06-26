<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabelsatuan extends Model
{
    use HasFactory;
    protected $fillable = ['kodesatuan', 'namasatuan',];

}
