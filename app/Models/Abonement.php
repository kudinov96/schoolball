<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $cost
 * @property int $cost_one_training
 * @property string $included
 * @property boolean $is_transfer
 * @property boolean $is_favorite
 * @property string $profit
 */
class Abonement extends Model
{
    protected $table = "abonement";

    protected $guarded = [
        "id"
    ];
}
