<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function customer() {
        return $this->belongsTo('App\Company', 'customer_id', 'id');
    }
}
