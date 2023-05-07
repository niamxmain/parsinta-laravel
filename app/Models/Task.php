<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    //jika guarded untuk website sendiri karena inputan mudah untuk dimanipulasi
    // protected $guarded = [];
    //gunakakan fillable dengan key untuk data yang hanya bs di input 
    // protected $fillable = ['tugas'];
    protected $fillable = ['tugas'];
}
