<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Tour
 * @package App\Models
 * @version November 27, 2021, 11:55 am JST
 *
 * @property foreignId $user_id
 * @property foreignId $photorally_division_id
 * @property foreignId $transport_division_id
 * @property time $schedule
 * @property string $departure_spot
 * @property time $departure_at
 * @property string $return_spot
 * @property time $return_at
 */
class Tour extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tours';

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'photorally_division_id',
        'transport_division_id',
        'schedule',
        'departure_spot',
        'departure_at',
        'return_spot',
        'return_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'departure_spot' => 'string',
        'return_spot' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|numeric',
        'photorally_division_id' => 'required|numeric',
        'transport_division_id' => 'required|numeric',
        'schedule' => 'required',
        'departure_spot' => 'required',
        'departure_at' => 'required',
        'return_spot' => 'required',
        'return_at' => 'required'
    ];


}
