<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'phone',
        'address'
    ];

    public function MandatorySavings() {
        return $this->hasMany(MandatorySaving::class, 'customer_id');
    }
}
