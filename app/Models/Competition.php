<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'description',
        'image'
    ];
    public function categories() {
        return $this->hasMany('App\Models\Category');
    }
}
