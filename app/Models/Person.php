<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Person
 * @package App\Models
 */
class Person extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $table = 'person';

    /**
     * @return HasMany
     */
    public function phones(): HasMany {
        return $this->hasMany(Phone::class);
    }

    /**
     * @return BelongsTo
     */
    public function shipOrder(): BelongsTo
    {
        return $this->belongsTo(Shiporder::class);
    }
}
