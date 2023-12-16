<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
        'status',
        'source_url',
    ];


    public function user(){
        return $this->belongsTo(\App\Models\User::class);
    }

    public function scopeActive($query){
        return $query->where('status', 1);

    }
}
