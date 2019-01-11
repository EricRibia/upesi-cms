<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable = [
        'name', 'type', 'logo', 'info', 'country_id'
    ];
    public function Country(){
        return $this->belongsTo('App/Country');
    }
}
