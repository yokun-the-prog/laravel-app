<?php

namespace App\Repositories;

use App\Models\Spot;
use App\Repositories\BaseRepository;

/**
 * Class SpotRepository
 * @package App\Repositories
 * @version November 27, 2021, 2:16 pm JST
*/

class SpotRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'address',
        'tel',
        'spot_location',
        'standard_term'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Spot::class;
    }
}
