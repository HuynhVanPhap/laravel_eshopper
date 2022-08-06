<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Brand extends Model
{
    use HasFactory;

    protected $table = "brands";
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

    /**
     * Get the category that owns the Brand
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'brand_category', 'brand_id', 'category_id');
    }
}
