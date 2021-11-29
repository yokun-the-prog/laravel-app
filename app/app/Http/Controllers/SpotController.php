<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSpotRequest;
use App\Http\Requests\UpdateSpotRequest;
use App\Repositories\SpotRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class SpotController extends AppBaseController
{
    /** @var  SpotRepository */
    private $spotRepository;

    public function __construct(SpotRepository $spotRepo)
    {
        $this->spotRepository = $spotRepo;
    }

    /**
     * Display a listing of the Spot.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $spots = $this->spotRepository->all();

        return view('admin/spots.index')
            ->with('spots', $spots);
    }

    /**
     * Show the form for creating a new Spot.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin/spots.create');
    }

    /**
     * Store a newly created Spot in storage.
     *
     * @param CreateSpotRequest $request
     *
     * @return Response
     */
    public function store(CreateSpotRequest $request)
    {
        $input = $request->all();

        $spot = $this->spotRepository->create($input);

        Flash::success('Spot saved successfully.');

        return redirect(route('spots.index'));
    }

    /**
     * Display the specified Spot.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $spot = $this->spotRepository->find($id);

        if (empty($spot)) {
            Flash::error('Spot not found');

            return redirect(route('spots.index'));
        }

        return view('admin/spots.show')->with('spot', $spot);
    }

    /**
     * Show the form for editing the specified Spot.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $spot = $this->spotRepository->find($id);

        if (empty($spot)) {
            Flash::error('Spot not found');

            return redirect(route('spots.index'));
        }

        return view('admin/spots.edit')->with('spot', $spot);
    }

    /**
     * Update the specified Spot in storage.
     *
     * @param int $id
     * @param UpdateSpotRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSpotRequest $request)
    {
        $spot = $this->spotRepository->find($id);

        if (empty($spot)) {
            Flash::error('Spot not found');

            return redirect(route('spots.index'));
        }

        $spot = $this->spotRepository->update($request->all(), $id);

        Flash::success('Spot updated successfully.');

        return redirect(route('spots.index'));
    }

    /**
     * Remove the specified Spot from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $spot = $this->spotRepository->find($id);

        if (empty($spot)) {
            Flash::error('Spot not found');

            return redirect(route('spots.index'));
        }

        $this->spotRepository->delete($id);

        Flash::success('Spot deleted successfully.');

        return redirect(route('spots.index'));
    }
}
