<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EnterpriseGroup extends Model
{
    protected $fillable = ['id' , 'group_name' , 'enterprise_id'];

    protected $with = ['enterprise'];

    public function enterprise (): BelongsTo
    {
        return $this->belongsTo(Enterprise::class , 'enterprise_id');
    }
}
