<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSpotTagRequest;
use App\Http\Requests\UpdateSpotTagRequest;
use App\Repositories\SpotTagRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SpotTagController extends AppBaseController
{
    /** @var  SpotTagRepository */
    private $spotTagRepository;

    public function __construct(SpotTagRepository $spotTagRepo)
    {
        $this->spotTagRepository = $spotTagRepo;
    }

    /**
     * Display a listing of the SpotTag.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $spotTags = $this->spotTagRepository->all();

        return view('spot_tags.index')
            ->with('spotTags', $spotTags);
    }

    /**
     * Show the form for creating a new SpotTag.
     *
     * @return Response
     */
    public function create()
    {
        return view('spot_tags.create');
    }

    /**
     * Store a newly created SpotTag in storage.
     *
     * @param CreateSpotTagRequest $request
     *
     * @return Response
     */
    public function store(CreateSpotTagRequest $request)
    {
        $input = $request->all();

        $spotTag = $this->spotTagRepository->create($input);

        Flash::success('Spot Tag saved successfully.');

        return redirect(route('spotTags.index'));
    }

    /**
     * Display the specified SpotTag.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $spotTag = $this->spotTagRepository->find($id);

        if (empty($spotTag)) {
            Flash::error('Spot Tag not found');

            return redirect(route('spotTags.index'));
        }

        return view('spot_tags.show')->with('spotTag', $spotTag);
    }

    /**
     * Show the form for editing the specified SpotTag.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $spotTag = $this->spotTagRepository->find($id);

        if (empty($spotTag)) {
            Flash::error('Spot Tag not found');

            return redirect(route('spotTags.index'));
        }

        return view('spot_tags.edit')->with('spotTag', $spotTag);
    }

    /**
     * Update the specified SpotTag in storage.
     *
     * @param int $id
     * @param UpdateSpotTagRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSpotTagRequest $request)
    {
        $spotTag = $this->spotTagRepository->find($id);

        if (empty($spotTag)) {
            Flash::error('Spot Tag not found');

            return redirect(route('spotTags.index'));
        }

        $spotTag = $this->spotTagRepository->update($request->all(), $id);

        Flash::success('Spot Tag updated successfully.');

        return redirect(route('spotTags.index'));
    }

    /**
     * Remove the specified SpotTag from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $spotTag = $this->spotTagRepository->find($id);

        if (empty($spotTag)) {
            Flash::error('Spot Tag not found');

            return redirect(route('spotTags.index'));
        }

        $this->spotTagRepository->delete($id);

        Flash::success('Spot Tag deleted successfully.');

        return redirect(route('spotTags.index'));
    }
}
