<?php

namespace App\Models\Xml;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class XmlShiporder
 */
class XmlShiporder extends Model
{
    use HasFactory;

    protected $table = 'xml_shiporder';
    protected $fillable = ['xml'];
}

