<?php

namespace App\Repositories;

use App\Models\SpotFilepath;
use App\Repositories\BaseRepository;

/**
 * Class SpotFilepathRepository
 * @package App\Repositories
 * @version November 27, 2021, 2:16 pm JST
*/

class SpotFilepathRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'spot_id',
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
        return SpotFilepath::class;
    }
}
