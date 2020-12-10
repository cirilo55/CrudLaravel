<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovementType extends Model
{
    protected $fillable = ['description'];

    public function cashier(){
        $this->belongsToMany(Cashier::class, 'cashier_movement_type', 'movement_type_id','cashier_id');
    }
}
