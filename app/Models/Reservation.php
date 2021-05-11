<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'num_of_guests',
        'arrival',
        'departure'
    ];
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
