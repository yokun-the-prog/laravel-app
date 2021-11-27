<?php

namespace App\Repositories;

use App\Models\photorally_division;
use App\Repositories\BaseRepository;

/**
 * Class photorally_divisionRepository
 * @package App\Repositories
 * @version November 27, 2021, 11:34 am JST
*/

class photorally_divisionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
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
        return photorally_division::class;
    }
}
