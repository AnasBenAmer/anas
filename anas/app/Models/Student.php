<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'id_number',
        'national_number',
        'phone_number',
        'sex',
        'city',
        'room_number',

    ];
    public function  room(){
        return $this->belongsTo(Room::class);
      }
}
