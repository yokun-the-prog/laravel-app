<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTourFilepathRequest;
use App\Http\Requests\UpdateTourFilepathRequest;
use App\Repositories\TourFilepathRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class TourFilepathController extends AppBaseController
{
    /** @var  TourFilepathRepository */
    private $tourFilepathRepository;

    public function __construct(TourFilepathRepository $tourFilepathRepo)
    {
        $this->tourFilepathRepository = $tourFilepathRepo;
    }

    /**
     * Display a listing of the TourFilepath.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tourFilepaths = $this->tourFilepathRepository->all();

        return view('tour_filepaths.index')
            ->with('tourFilepaths', $tourFilepaths);
    }

    /**
     * Show the form for creating a new TourFilepath.
     *
     * @return Response
     */
    public function create()
    {
        return view('tour_filepaths.create');
    }

    /**
     * Store a newly created TourFilepath in storage.
     *
     * @param CreateTourFilepathRequest $request
     *
     * @return Response
     */
    public function store(CreateTourFilepathRequest $request)
    {
        $input = $request->all();

        $tourFilepath = $this->tourFilepathRepository->create($input);

        Flash::success('Tour Filepath saved successfully.');

        return redirect(route('tourFilepaths.index'));
    }

    /**
     * Display the specified TourFilepath.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tourFilepath = $this->tourFilepathRepository->find($id);

        if (empty($tourFilepath)) {
            Flash::error('Tour Filepath not found');

            return redirect(route('tourFilepaths.index'));
        }

        return view('tour_filepaths.show')->with('tourFilepath', $tourFilepath);
    }

    /**
     * Show the form for editing the specified TourFilepath.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tourFilepath = $this->tourFilepathRepository->find($id);

        if (empty($tourFilepath)) {
            Flash::error('Tour Filepath not found');

            return redirect(route('tourFilepaths.index'));
        }

        return view('tour_filepaths.edit')->with('tourFilepath', $tourFilepath);
    }

    /**
     * Update the specified TourFilepath in storage.
     *
     * @param int $id
     * @param UpdateTourFilepathRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTourFilepathRequest $request)
    {
        $tourFilepath = $this->tourFilepathRepository->find($id);

        if (empty($tourFilepath)) {
            Flash::error('Tour Filepath not found');

            return redirect(route('tourFilepaths.index'));
        }

        $tourFilepath = $this->tourFilepathRepository->update($request->all(), $id);

        Flash::success('Tour Filepath updated successfully.');

        return redirect(route('tourFilepaths.index'));
    }

    /**
     * Remove the specified TourFilepath from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tourFilepath = $this->tourFilepathRepository->find($id);

        if (empty($tourFilepath)) {
            Flash::error('Tour Filepath not found');

            return redirect(route('tourFilepaths.index'));
        }

        $this->tourFilepathRepository->delete($id);

        Flash::success('Tour Filepath deleted successfully.');

        return redirect(route('tourFilepaths.index'));
    }
}
