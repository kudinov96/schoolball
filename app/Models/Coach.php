<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Coach extends Model
{
    protected $table = "coach";

    protected $guarded = [
        "id"
    ];

    public function clubs(): BelongsToMany
    {
        return $this->belongsToMany(Club::class, "coach_club");
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
