<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Irrigation extends Model
{
    
    protected $table= 'Irrigations';
    protected $fillable= [
       
        'id','crop_id'
    ];

        public function Crops()
        {
            return $this->belognTo('App\Crop');
        }
    
    
}
