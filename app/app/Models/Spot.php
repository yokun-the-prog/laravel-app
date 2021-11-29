<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Spot
 * @package App\Models
 * @version November 27, 2021, 2:16 pm JST
 *
 * @property string $name
 * @property string $address
 * @property string $tel
 * @property string $spot_location
 * @property string $standard_term
 */
class Spot extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'spots';
    

    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'address',
        'tel',
        'spot_location',
        'standard_term',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'address' => 'string',
        'tel' => 'string',
        'spot_location' => 'string',
        'standard_term' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'address' => 'required',
        'tel' => 'required',
        'spot_location' => 'required',
        'standard_term' => 'required'
    ];

    
}
