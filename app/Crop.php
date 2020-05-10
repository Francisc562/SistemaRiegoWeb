<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    protected $table='Crops';
    protected $fillable=[

        'id','name','humidity'
    ];

    public function Irrigations()
    {
        return $this->hashmany('App\Irrigation');
    }

}
