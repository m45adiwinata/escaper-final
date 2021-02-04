<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockistCountry extends Model
{
    protected $table = 'stockist_countries';
    
    public function stockist()
    {
        return $this->hasMany('App\Stockist', 'country_id');
    }
}
