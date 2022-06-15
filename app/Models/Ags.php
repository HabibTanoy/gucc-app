<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ags extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'ags';

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
}
