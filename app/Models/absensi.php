<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    protected $table = 'absensi';
    protected $fillable = ['user_id', 'date', 'time_in', 'status'];
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
