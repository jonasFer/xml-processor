<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Shiporder
 * @package App\Models
 */
class Shiporder extends Model
{
    use HasFactory;

    protected $fillable = ['person_id', 'shipto_id'];
    protected $table = 'shiporder';

    /**
     * @return BelongsTo
     */
    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    /**
     * @return BelongsTo
     */
    public function shipto(): BelongsTo
    {
        return $this->belongsTo(Shipto::class);
    }

    /**
     * @return HasMany
     */
    public function items(): HasMany {
        return $this->hasMany(Item::class);
    }
}
