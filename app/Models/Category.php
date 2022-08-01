<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $fillable = [
        "id",
        "name",
        "slug",
        "code",
        "display"
    ];

    // Cover type of display field: tinyInt to boolean
    protected $casts = [
        'display' => 'boolean',
    ];

    protected $dates = ['deleted_at'];
    protected $hidden = ['pivot']; // Thứ này sẽ giúp không phải get thêm data từ pivot một cách tự động

}
