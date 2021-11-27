<?php

namespace App\Repositories;

use App\Models\ErratumDivision;
use App\Repositories\BaseRepository;

/**
 * Class ErratumDivisionRepository
 * @package App\Repositories
 * @version November 27, 2021, 2:06 pm JST
*/

class ErratumDivisionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return ErratumDivision::class;
    }
}
