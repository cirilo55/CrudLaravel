<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Address extends Model
{
    protected $fillable = ['id', 'street', 'city', 'state'];

    public function enterprise(): HasOne
    {
        return $this->hasOne(Enterprise::class);
    }

}
