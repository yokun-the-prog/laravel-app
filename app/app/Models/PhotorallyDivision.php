<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class PhotorallyDivision
 * @package App\Models
 * @version November 27, 2021, 11:41 am JST
 *
 * @property string $name
 */
class PhotorallyDivision extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'photorally_divisions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
