<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Core extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The Members that belong to the core.
     */
    public function members()
    {
        return $this->belongsToMany(Member::class)->withTimestamps();
    }
}
