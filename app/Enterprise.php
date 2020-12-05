<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Enterprise extends Model
{
    protected $fillable = ['id', 'company_name', 'cnpj', 'fantasy_name', 'address_id', 'contact_id'];

    protected $with = ['address', 'contact'];

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'address_id');
    }
    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class, "contact_id");
    }
}
