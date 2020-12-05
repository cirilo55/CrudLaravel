<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    protected $fillable = ['id','name', 'email', 'enterprise_id'];



    public function contact(): BelongsTo
    {
        return $this->belongsTo(Enterprise::class, 'enterprise_id');
    }


}
