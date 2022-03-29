<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Buyer
 * @package App\Models
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
class Buyer extends Model
{
    use HasFactory;

    protected $table = 'buyers';

    protected $fillable = [
        'name',
        'blocked',
        'surname',
        'phone',
        'email',
        'registration_date'
    ];

    /**
     * Defines one-to-many relation for tables
     *
     * @returns HasMany
     */
    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }
}
