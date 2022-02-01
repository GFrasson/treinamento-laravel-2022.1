<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the Role of a member.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * The cores that belong to the member.
     */
    public function cores()
    {
        return $this->belongsToMany(Core::class)->withTimestamps();
    }
}
