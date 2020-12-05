<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Contact extends Model
{
    protected $fillable = ['id','name', 'email', 'enterprise_id'];



    public function contact(): HasMany
    {
        return $this->hasMany(Enterprise::class, 'enterprise_id');
    }


}
