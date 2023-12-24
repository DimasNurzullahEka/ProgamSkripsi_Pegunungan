<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peraturan extends Model
{
    use HasFactory;
    protected $table = 'peraturans';
    protected $fillable = ['id','list_peraturan','is_checked'];
}
