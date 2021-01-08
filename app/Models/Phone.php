<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Phone
 * @package App\Models
 */
class Phone extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'person_id'];
    protected $table = 'phone';

    /**
     * @return BelongsTo
     */
    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}
