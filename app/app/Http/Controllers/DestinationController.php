<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;
use App\Repositories\DestinationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DestinationController extends AppBaseController
{
    /** @var  DestinationRepository */
    private $destinationRepository;

    public function __construct(DestinationRepository $destinationRepo)
    {
        $this->destinationRepository = $destinationRepo;
    }

    /**
     * Display a listing of the Destination.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $destinations = $this->destinationRepository->all();

        return view('destinations.index')
            ->with('destinations', $destinations);
    }

    /**
     * Show the form for creating a new Destination.
     *
     * @return Response
     */
    public function create()
    {
        return view('destinations.create');
    }

    /**
     * Store a newly created Destination in storage.
     *
     * @param CreateDestinationRequest $request
     *
     * @return Response
     */
    public function store(CreateDestinationRequest $request)
    {
        $input = $request->all();

        $destination = $this->destinationRepository->create($input);

        Flash::success('Destination saved successfully.');

        return redirect(route('destinations.index'));
    }

    /**
     * Display the specified Destination.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $destination = $this->destinationRepository->find($id);

        if (empty($destination)) {
            Flash::error('Destination not found');

            return redirect(route('destinations.index'));
        }

        return view('destinations.show')->with('destination', $destination);
    }

    /**
     * Show the form for editing the specified Destination.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $destination = $this->destinationRepository->find($id);

        if (empty($destination)) {
            Flash::error('Destination not found');

            return redirect(route('destinations.index'));
        }

        return view('destinations.edit')->with('destination', $destination);
    }

    /**
     * Update the specified Destination in storage.
     *
     * @param int $id
     * @param UpdateDestinationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDestinationRequest $request)
    {
        $destination = $this->destinationRepository->find($id);

        if (empty($destination)) {
            Flash::error('Destination not found');

            return redirect(route('destinations.index'));
        }

        $destination = $this->destinationRepository->update($request->all(), $id);

        Flash::success('Destination updated successfully.');

        return redirect(route('destinations.index'));
    }

    /**
     * Remove the specified Destination from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $destination = $this->destinationRepository->find($id);

        if (empty($destination)) {
            Flash::error('Destination not found');

            return redirect(route('destinations.index'));
        }

        $this->destinationRepository->delete($id);

        Flash::success('Destination deleted successfully.');

        return redirect(route('destinations.index'));
    }
}
