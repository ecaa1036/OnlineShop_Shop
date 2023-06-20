<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = "_produks";
    protected $primaryKey = "id_produk";
    protected $guarded = [''];
    protected $keyType = "string";

}