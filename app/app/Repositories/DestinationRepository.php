<?php

namespace App\Repositories;

use App\Models\Destination;
use App\Repositories\BaseRepository;

/**
 * Class DestinationRepository
 * @package App\Repositories
 * @version November 27, 2021, 2:18 pm JST
*/

class DestinationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tour_id',
        'spot_id',
        'erratum_division_id',
        'arrive_at',
        'departure_at',
        'photorally_location'
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
        return Destination::class;
    }
}
