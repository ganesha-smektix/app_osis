<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    protected $table = 'laporan';
    protected $fillable = ['user_id', 'title', 'content', 'status'];
    public $timestamps = true;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
