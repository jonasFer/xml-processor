<?php

namespace App\Models\Xml;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class XmlPeople
 */
class XmlPeople extends Model
{
    use HasFactory;

    protected $table = 'xml_people';
    protected $fillable = ['xml'];
}

