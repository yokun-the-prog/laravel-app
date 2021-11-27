<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SpotFilepath
 * @package App\Models
 * @version November 27, 2021, 2:16 pm JST
 *
 * @property foreignId $spot_id
 * @property string $highlight_path
 * @property string $route_path
 * @property string $photorally_path
 * @property string $title
 */
class SpotFilepath extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'spot_filepaths';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'spot_id',
        'highlight_path',
        'route_path',
        'photorally_path',
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'highlight_path' => 'string',
        'route_path' => 'string',
        'photorally_path' => 'string',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'spot_id' => 'required|numeric',
        'highlight_path' => 'nullable',
        'route_path' => 'nullable',
        'photorally_path' => 'nullable',
        'title' => 'required'
    ];

    
}
