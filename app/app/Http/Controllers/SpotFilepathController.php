<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSpotFilepathRequest;
use App\Http\Requests\UpdateSpotFilepathRequest;
use App\Repositories\SpotFilepathRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class SpotFilepathController extends AppBaseController
{
    /** @var  SpotFilepathRepository */
    private $spotFilepathRepository;

    public function __construct(SpotFilepathRepository $spotFilepathRepo)
    {
        $this->spotFilepathRepository = $spotFilepathRepo;
    }

    /**
     * Display a listing of the SpotFilepath.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $spotFilepaths = $this->spotFilepathRepository->all();

        return view('spot_filepaths.index')
            ->with('spotFilepaths', $spotFilepaths);
    }

    /**
     * Show the form for creating a new SpotFilepath.
     *
     * @return Response
     */
    public function create()
    {
        return view('spot_filepaths.create');
    }

    /**
     * Store a newly created SpotFilepath in storage.
     *
     * @param CreateSpotFilepathRequest $request
     *
     * @return Response
     */
    public function store(CreateSpotFilepathRequest $request)
    {
        $input = $request->all();

        $spotFilepath = $this->spotFilepathRepository->create($input);

        Flash::success('Spot Filepath saved successfully.');

        return redirect(route('spotFilepaths.index'));
    }

    /**
     * Display the specified SpotFilepath.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $spotFilepath = $this->spotFilepathRepository->find($id);

        if (empty($spotFilepath)) {
            Flash::error('Spot Filepath not found');

            return redirect(route('spotFilepaths.index'));
        }

        return view('spot_filepaths.show')->with('spotFilepath', $spotFilepath);
    }

    /**
     * Show the form for editing the specified SpotFilepath.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $spotFilepath = $this->spotFilepathRepository->find($id);

        if (empty($spotFilepath)) {
            Flash::error('Spot Filepath not found');

            return redirect(route('spotFilepaths.index'));
        }

        return view('spot_filepaths.edit')->with('spotFilepath', $spotFilepath);
    }

    /**
     * Update the specified SpotFilepath in storage.
     *
     * @param int $id
     * @param UpdateSpotFilepathRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSpotFilepathRequest $request)
    {
        $spotFilepath = $this->spotFilepathRepository->find($id);

        if (empty($spotFilepath)) {
            Flash::error('Spot Filepath not found');

            return redirect(route('spotFilepaths.index'));
        }

        $spotFilepath = $this->spotFilepathRepository->update($request->all(), $id);

        Flash::success('Spot Filepath updated successfully.');

        return redirect(route('spotFilepaths.index'));
    }

    /**
     * Remove the specified SpotFilepath from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $spotFilepath = $this->spotFilepathRepository->find($id);

        if (empty($spotFilepath)) {
            Flash::error('Spot Filepath not found');

            return redirect(route('spotFilepaths.index'));
        }

        $this->spotFilepathRepository->delete($id);

        Flash::success('Spot Filepath deleted successfully.');

        return redirect(route('spotFilepaths.index'));
    }
}
