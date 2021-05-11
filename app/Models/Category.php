<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'competition_id',
        'type',
        'description',
        'price',
        'image'
    ];
    public function competition() {
        return $this->belongsTo('App\Models\Competition');
    }
}
