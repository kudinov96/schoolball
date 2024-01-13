<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Club extends Model
{
    protected $table = "club";

    protected $guarded = [
        "id"
    ];

    public function coaches(): BelongsToMany
    {
        return $this->belongsToMany(Coach::class, "coach_club");
    }
}
