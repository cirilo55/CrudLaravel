<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Enterprise extends Model
{
    protected $fillable = ['id', 'company_name', 'cnpj', 'fantasy_name', 'address_id'];

    protected $with = ['address', 'contact'];

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'address_id');
    }
    public function contact(): HasMany
    {
        return $this->hasMany(Contact::class);
    }
}
