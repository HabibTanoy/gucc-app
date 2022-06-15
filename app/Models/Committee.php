<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'executive_committees';

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
}
