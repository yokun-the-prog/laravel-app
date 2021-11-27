<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TourFilepath
 * @package App\Models
 * @version November 27, 2021, 2:05 pm JST
 *
 * @property foreignId $tour_id
 * @property string $map_path
 * @property string $history_path
 * @property string $photorally_path
 */
class TourFilepath extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tour_filepaths';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'tour_id',
        'map_path',
        'history_path',
        'photorally_path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'map_path' => 'string',
        'history_path' => 'string',
        'photorally_path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tour_id' => 'required|numeric',
        'map_path' => 'nullable',
        'history_path' => 'nullable',
        'photorally_path' => 'nullable'
    ];

    
}
