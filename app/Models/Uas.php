<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uas extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_21312004';

    protected $fillable = ['npm', 'nama', 'alamat'];
}
