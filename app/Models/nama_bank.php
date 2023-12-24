<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nama_bank extends Model
{
    use HasFactory;
    protected $table = 'nama_banks';
    protected $fillable = ['id','nama_bank', 'nomer_rekening'];
}
