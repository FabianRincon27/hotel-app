<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;

    protected $primeryKey  = 'id';
    protected $table = 'rooms';
    protected $fillable = ['id_hotel','amount', 'type', 'accommodation'];

    public function hotel()
    {
      return $this->hasOne(Hotel::class, 'id', 'id_hotel');
    }
}
