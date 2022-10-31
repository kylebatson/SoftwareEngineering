<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Catalog extends Model
{
    use HasFactory;

    protected $table = 'catalog';
    public $timestamps = false;

    protected $fillable = ["name", "category", "price", "supplier", "description"];
}
