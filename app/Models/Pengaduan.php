<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $guarded = [
        'id'
    ];
    public function pengaduan(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
