<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'hotel';
    protected $fillable = ['name', 'address', 'city', 'number_of_rooms', 'asigned_rooms'];

    public function rooms()
  {
    return $this->hasMany(Rooms::class, 'id_hotel', 'id');
  }
}
