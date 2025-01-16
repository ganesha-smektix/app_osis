<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['no', 'name', 'class', 'nis'];
    public $timestamps = true;
}
