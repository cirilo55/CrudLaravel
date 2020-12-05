<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnterpriseGroup extends Model
{
    protected $fillable = ['id', 'description', 'enterprise_id'];
}
