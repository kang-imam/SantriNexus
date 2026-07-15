<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pesantren extends Model
{
    protected $fillable = [
        'village_id',
        'code',
        'name',
        'slug',
        'nspp',
        'npsn',
        'type',
        'leader_name',
        'address',
        'postal_code',
        'phone',
        'whatsapp',
        'email',
        'website',
        'latitude',
        'longitude',
        'description',
        'is_active',
    ];

    public function village(): BelongsTo
    {
        return $this->belongsTo(Village::class);
    }
}
