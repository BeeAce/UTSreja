<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    public $table = 'kendaraans';

    protected $fillable = [
        'name',
        'manufacturer',
        'type',
        'fuel'
    ];

    public static function types()
    {
        return [
            'Bike',
            'Motorcycle',
            'Car',
            'Uncategorized'
        ];
    }

    public static function fuels()
    {
        return [
            'Gasoline',
            'Electric',
            'Hybrid',
            'Uncategorized'
        ];
    }
}
