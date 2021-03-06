<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;

class Resep extends Model
{
    use HasFactory;
    protected $table = 'resep';
    protected $guarded = [];
    public $timestamps = false;

    public function like(){
        return $this->hasMany(Like::class, 'resep_id', 'user_id', 'id');
    }
}
