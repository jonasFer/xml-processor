<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Item
 * @package App\Models
 */
class Item extends Model
{
    use HasFactory;

    protected $table = 'item';
    protected $fillable = ['title', 'note', 'quantity', 'price', 'shiporder_id'];

    /**
     * @return BelongsTo
     */
    public function shiporder(): BelongsTo
    {
        return $this->belongsTo(Shiporder::class);
    }
}
