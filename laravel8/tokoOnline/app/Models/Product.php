<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $fillable = ['name', 'description', 'price', 'image_url'];//ini untuk fild mana saja yang mau di input kedatabas
    protected $guarded = ['id'];//ini di gunakan ketika fild banyak, dari pada nulis semua mending buat satu yang harus dilindungi yak ni id
}
