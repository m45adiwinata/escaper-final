<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stockist extends Model
{
    protected $guarded = [];
    
    public function country()
    {
        return $this->belongsTo('App\StockistCountry', 'country_id');
    }
}
