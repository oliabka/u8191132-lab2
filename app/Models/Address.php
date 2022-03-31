<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Address
 * @package app\Models
 *
 * @property int $id
 * @property string $name
 * @property string $city
 * @property string $street_or_district
 * @property string $house
 * @property string $floor
 * @property string $apartment
 * @property string $code
 * @property string $buyer_id
 */
class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';

    protected $fillable = [
        'name',
        'city',
        'street_or_district',
        'house',
        'floor',
        'apartment',
        'code',
        'buyer_id',
        'addition_date'
    ];

    /**
     * Defines one-to-many relation for tables
     *
     * @returns BelongsTo
     */
    public function addresses(): BelongsTo
    {
        return $this->belongsTo(Buyer::class);
    }
}
