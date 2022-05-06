<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = "brands";
    protected $fillable = [
        "id",
        "name",
        "slug",
        "code",
        "display",
        "category_id"
    ];

    // Cover type of display field: tinyInt to boolean
    protected $casts = [
        'display' => 'boolean',
    ];

    protected $dates = ['deleted_at'];
}
