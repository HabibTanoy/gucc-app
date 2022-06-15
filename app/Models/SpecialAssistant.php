<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialAssistant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'special_assistant';

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
}
