<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $guarded = [];

    public function category(){
        return $this->belongsTo('App\PortfolioCategory', 'category_id');
    }
}
