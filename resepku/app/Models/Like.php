<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resep;

class Like extends Model
{
    use HasFactory;
    protected $table = 'like';
    protected $guarded = [];
    public $timestamps = false;

    public function resep(){
        return $this->belongsTo(Resep::class);
    }
}
