<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePhotorallyDivisionRequest;
use App\Http\Requests\UpdatePhotorallyDivisionRequest;
use App\Repositories\PhotorallyDivisionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PhotorallyDivisionController extends AppBaseController
{
    /** @var  PhotorallyDivisionRepository */
    private $photorallyDivisionRepository;

    public function __construct(PhotorallyDivisionRepository $photorallyDivisionRepo)
    {
        $this->photorallyDivisionRepository = $photorallyDivisionRepo;
    }

    /**
     * Display a listing of the PhotorallyDivision.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $photorallyDivisions = $this->photorallyDivisionRepository->all();

        return view('photorally_divisions.index')
            ->with('photorallyDivisions', $photorallyDivisions);
    }

    /**
     * Show the form for creating a new PhotorallyDivision.
     *
     * @return Response
     */
    public function create()
    {
        return view('photorally_divisions.create');
    }

    /**
     * Store a newly created PhotorallyDivision in storage.
     *
     * @param CreatePhotorallyDivisionRequest $request
     *
     * @return Response
     */
    public function store(CreatePhotorallyDivisionRequest $request)
    {
        $input = $request->all();

        $photorallyDivision = $this->photorallyDivisionRepository->create($input);

        Flash::success('Photorally Division saved successfully.');

        return redirect(route('photorallyDivisions.index'));
    }

    /**
     * Display the specified PhotorallyDivision.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $photorallyDivision = $this->photorallyDivisionRepository->find($id);

        if (empty($photorallyDivision)) {
            Flash::error('Photorally Division not found');

            return redirect(route('photorallyDivisions.index'));
        }

        return view('photorally_divisions.show')->with('photorallyDivision', $photorallyDivision);
    }

    /**
     * Show the form for editing the specified PhotorallyDivision.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $photorallyDivision = $this->photorallyDivisionRepository->find($id);

        if (empty($photorallyDivision)) {
            Flash::error('Photorally Division not found');

            return redirect(route('photorallyDivisions.index'));
        }

        return view('photorally_divisions.edit')->with('photorallyDivision', $photorallyDivision);
    }

    /**
     * Update the specified PhotorallyDivision in storage.
     *
     * @param int $id
     * @param UpdatePhotorallyDivisionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePhotorallyDivisionRequest $request)
    {
        $photorallyDivision = $this->photorallyDivisionRepository->find($id);

        if (empty($photorallyDivision)) {
            Flash::error('Photorally Division not found');

            return redirect(route('photorallyDivisions.index'));
        }

        $photorallyDivision = $this->photorallyDivisionRepository->update($request->all(), $id);

        Flash::success('Photorally Division updated successfully.');

        return redirect(route('photorallyDivisions.index'));
    }

    /**
     * Remove the specified PhotorallyDivision from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $photorallyDivision = $this->photorallyDivisionRepository->find($id);

        if (empty($photorallyDivision)) {
            Flash::error('Photorally Division not found');

            return redirect(route('photorallyDivisions.index'));
        }

        $this->photorallyDivisionRepository->delete($id);

        Flash::success('Photorally Division deleted successfully.');

        return redirect(route('photorallyDivisions.index'));
    }
}
