<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Destination
 * @package App\Models
 * @version November 27, 2021, 2:18 pm JST
 *
 * @property foreignId $tour_id
 * @property foreignId $spot_id
 * @property foreignId $erratum_division_id
 * @property time $arrive_at
 * @property time $departure_at
 */
class Destination extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'destinations';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'tour_id',
        'spot_id',
        'erratum_division_id',
        'arrive_at',
        'departure_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'photorally_location' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tour_id' => 'required|numeric',
        'spot_id' => 'required|numeric',
        'erratum_division_id' => 'required|numeric',
        'arrive_at' => 'required',
        'departure_at' => 'required',
        'photorally_location' => 'required'
    ];

    
}
