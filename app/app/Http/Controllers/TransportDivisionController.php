<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTransportDivisionRequest;
use App\Http\Requests\UpdateTransportDivisionRequest;
use App\Repositories\TransportDivisionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class TransportDivisionController extends AppBaseController
{
    /** @var  TransportDivisionRepository */
    private $transportDivisionRepository;

    public function __construct(TransportDivisionRepository $transportDivisionRepo)
    {
        $this->transportDivisionRepository = $transportDivisionRepo;
    }

    /**
     * Display a listing of the TransportDivision.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $transportDivisions = $this->transportDivisionRepository->all();

        return view('transport_divisions.index')
            ->with('transportDivisions', $transportDivisions);
    }

    /**
     * Show the form for creating a new TransportDivision.
     *
     * @return Response
     */
    public function create()
    {
        return view('transport_divisions.create');
    }

    /**
     * Store a newly created TransportDivision in storage.
     *
     * @param CreateTransportDivisionRequest $request
     *
     * @return Response
     */
    public function store(CreateTransportDivisionRequest $request)
    {
        $input = $request->all();

        $transportDivision = $this->transportDivisionRepository->create($input);

        Flash::success('Transport Division saved successfully.');

        return redirect(route('transportDivisions.index'));
    }

    /**
     * Display the specified TransportDivision.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transportDivision = $this->transportDivisionRepository->find($id);

        if (empty($transportDivision)) {
            Flash::error('Transport Division not found');

            return redirect(route('transportDivisions.index'));
        }

        return view('transport_divisions.show')->with('transportDivision', $transportDivision);
    }

    /**
     * Show the form for editing the specified TransportDivision.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transportDivision = $this->transportDivisionRepository->find($id);

        if (empty($transportDivision)) {
            Flash::error('Transport Division not found');

            return redirect(route('transportDivisions.index'));
        }

        return view('transport_divisions.edit')->with('transportDivision', $transportDivision);
    }

    /**
     * Update the specified TransportDivision in storage.
     *
     * @param int $id
     * @param UpdateTransportDivisionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTransportDivisionRequest $request)
    {
        $transportDivision = $this->transportDivisionRepository->find($id);

        if (empty($transportDivision)) {
            Flash::error('Transport Division not found');

            return redirect(route('transportDivisions.index'));
        }

        $transportDivision = $this->transportDivisionRepository->update($request->all(), $id);

        Flash::success('Transport Division updated successfully.');

        return redirect(route('transportDivisions.index'));
    }

    /**
     * Remove the specified TransportDivision from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transportDivision = $this->transportDivisionRepository->find($id);

        if (empty($transportDivision)) {
            Flash::error('Transport Division not found');

            return redirect(route('transportDivisions.index'));
        }

        $this->transportDivisionRepository->delete($id);

        Flash::success('Transport Division deleted successfully.');

        return redirect(route('transportDivisions.index'));
    }
}
