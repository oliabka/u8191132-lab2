<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Buyer
 * @package app\Models
 *
 * @property int $id
 * @property string $name
 * @property boolean $blocked
 * @property string $surname
 * @property string $phone
 * @property string $email
 */
class Buyer extends Model{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'blocked',
        'surname',
        'phone',
        'email'
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
