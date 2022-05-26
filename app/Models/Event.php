<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Event extends Model
{
    public function workshops() : HasMany
    {
        return $this->hasMany(Workshop::class,'event_id','id');
    }

    public function first_workshop() : HasOne
    {
        return $this->hasOne(Workshop::class, 'event_id', 'id')->orderBy("start");
    }
}
