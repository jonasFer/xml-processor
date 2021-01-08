<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Shipto
 * @package App\Models
 */
class Shipto extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address_id'];
    protected $table = 'shipto';

    /**
     * @return HasMany
     */
    public function shiporders(): HasMany
    {
        return $this->hasMany(Shiporder::class);
    }

    /**
     * @return HasOne
     */
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }
}
