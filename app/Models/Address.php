<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Buyer
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
class Address extends Model{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'city',
        'street_or_district',
        'house',
        'floor',
        'apartment',
        'code',
        'buyer_id'
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
