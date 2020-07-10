<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAssigningRequest;
use App\Http\Requests\UpdateAssigningRequest;
use App\Repositories\AssigningRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AssigningController extends AppBaseController
{
    /** @var  AssigningRepository */
    private $assigningRepository;

    public function __construct(AssigningRepository $assigningRepo)
    {
        $this->assigningRepository = $assigningRepo;
    }

    /**
     * Display a listing of the Assigning.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $assignings = $this->assigningRepository->all();

        return view('assignings.index')
            ->with('assignings', $assignings);
    }

    /**
     * Show the form for creating a new Assigning.
     *
     * @return Response
     */
    public function create()
    {
        return view('assignings.create');
    }

    /**
     * Store a newly created Assigning in storage.
     *
     * @param CreateAssigningRequest $request
     *
     * @return Response
     */
    public function store(CreateAssigningRequest $request)
    {
        $input = $request->all();

        $assigning = $this->assigningRepository->create($input);

        Flash::success('Assigning saved successfully.');

        return redirect(route('assignings.index'));
    }

    /**
     * Display the specified Assigning.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $assigning = $this->assigningRepository->find($id);

        if (empty($assigning)) {
            Flash::error('Assigning not found');

            return redirect(route('assignings.index'));
        }

        return view('assignings.show')->with('assigning', $assigning);
    }

    /**
     * Show the form for editing the specified Assigning.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $assigning = $this->assigningRepository->find($id);

        if (empty($assigning)) {
            Flash::error('Assigning not found');

            return redirect(route('assignings.index'));
        }

        return view('assignings.edit')->with('assigning', $assigning);
    }

    /**
     * Update the specified Assigning in storage.
     *
     * @param int $id
     * @param UpdateAssigningRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAssigningRequest $request)
    {
        $assigning = $this->assigningRepository->find($id);

        if (empty($assigning)) {
            Flash::error('Assigning not found');

            return redirect(route('assignings.index'));
        }

        $assigning = $this->assigningRepository->update($request->all(), $id);

        Flash::success('Assigning updated successfully.');

        return redirect(route('assignings.index'));
    }

    /**
     * Remove the specified Assigning from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $assigning = $this->assigningRepository->find($id);

        if (empty($assigning)) {
            Flash::error('Assigning not found');

            return redirect(route('assignings.index'));
        }

        $this->assigningRepository->delete($id);

        Flash::success('Assigning deleted successfully.');

        return redirect(route('assignings.index'));
    }
}
