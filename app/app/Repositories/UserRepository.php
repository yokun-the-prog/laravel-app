<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;

//use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class UserRepository
 * @package App\Repositories
 * @version November 27, 2021, 11:55 am JST
*/

class UserRepository extends BaseRepository
{
/**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     **/
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }
}
