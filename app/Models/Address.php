<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'city', 'country'];
    protected $table = 'address';

    /**
     * @return BelongsTo
     */
    public function shipto(): BelongsTo
    {
        return $this->belongsTo(Shipto::class);
    }
}
