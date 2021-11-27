<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateErratumDivisionRequest;
use App\Http\Requests\UpdateErratumDivisionRequest;
use App\Repositories\ErratumDivisionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ErratumDivisionController extends AppBaseController
{
    /** @var  ErratumDivisionRepository */
    private $erratumDivisionRepository;

    public function __construct(ErratumDivisionRepository $erratumDivisionRepo)
    {
        $this->erratumDivisionRepository = $erratumDivisionRepo;
    }

    /**
     * Display a listing of the ErratumDivision.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $erratumDivisions = $this->erratumDivisionRepository->all();

        return view('erratum_divisions.index')
            ->with('erratumDivisions', $erratumDivisions);
    }

    /**
     * Show the form for creating a new ErratumDivision.
     *
     * @return Response
     */
    public function create()
    {
        return view('erratum_divisions.create');
    }

    /**
     * Store a newly created ErratumDivision in storage.
     *
     * @param CreateErratumDivisionRequest $request
     *
     * @return Response
     */
    public function store(CreateErratumDivisionRequest $request)
    {
        $input = $request->all();

        $erratumDivision = $this->erratumDivisionRepository->create($input);

        Flash::success('Erratum Division saved successfully.');

        return redirect(route('erratumDivisions.index'));
    }

    /**
     * Display the specified ErratumDivision.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $erratumDivision = $this->erratumDivisionRepository->find($id);

        if (empty($erratumDivision)) {
            Flash::error('Erratum Division not found');

            return redirect(route('erratumDivisions.index'));
        }

        return view('erratum_divisions.show')->with('erratumDivision', $erratumDivision);
    }

    /**
     * Show the form for editing the specified ErratumDivision.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $erratumDivision = $this->erratumDivisionRepository->find($id);

        if (empty($erratumDivision)) {
            Flash::error('Erratum Division not found');

            return redirect(route('erratumDivisions.index'));
        }

        return view('erratum_divisions.edit')->with('erratumDivision', $erratumDivision);
    }

    /**
     * Update the specified ErratumDivision in storage.
     *
     * @param int $id
     * @param UpdateErratumDivisionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateErratumDivisionRequest $request)
    {
        $erratumDivision = $this->erratumDivisionRepository->find($id);

        if (empty($erratumDivision)) {
            Flash::error('Erratum Division not found');

            return redirect(route('erratumDivisions.index'));
        }

        $erratumDivision = $this->erratumDivisionRepository->update($request->all(), $id);

        Flash::success('Erratum Division updated successfully.');

        return redirect(route('erratumDivisions.index'));
    }

    /**
     * Remove the specified ErratumDivision from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $erratumDivision = $this->erratumDivisionRepository->find($id);

        if (empty($erratumDivision)) {
            Flash::error('Erratum Division not found');

            return redirect(route('erratumDivisions.index'));
        }

        $this->erratumDivisionRepository->delete($id);

        Flash::success('Erratum Division deleted successfully.');

        return redirect(route('erratumDivisions.index'));
    }
}
