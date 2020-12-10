<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cashier extends Model
{
    protected $fillable = ['movement_date', 'value_of_sale', 'value_of_product', 'deduction'];

    protected $with = ['movementType'];

    public function movementType(): BelongsToMany
    {
        return $this->belongsToMany(MovementType::class, 'cashier_movement_type', 'cashier_id','movement_type_id');
    }
}
