<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTourRequest;
use App\Http\Requests\UpdateTourRequest;
use App\Repositories\TourRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class PlanController extends AppBaseController
{
    /** @var  TourRepository */
    //private $tourRepository;

    public function __construct(TourRepository $tourRepo)
     {
        // 生成時の命令、とりあえず空白にする
        $this->tourRepository = $tourRepo;
    }

    /**
     * Display a listing of the Tour.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tours = $this->tourRepository->all();
        return view('plans.index')
            ->with('plans', $tours);
     }
    // public function edit(Request $request)
    // {


    // } 

    // public function edit(Request $request)
    // {


    // } 


    
}
