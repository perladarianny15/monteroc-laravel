<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function Category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
