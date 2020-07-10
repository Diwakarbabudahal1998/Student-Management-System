<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSchedulingRequest;
use App\Http\Requests\UpdateSchedulingRequest;
use App\Repositories\SchedulingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SchedulingController extends AppBaseController
{
    /** @var  SchedulingRepository */
    private $schedulingRepository;

    public function __construct(SchedulingRepository $schedulingRepo)
    {
        $this->schedulingRepository = $schedulingRepo;
    }

    /**
     * Display a listing of the Scheduling.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $schedulings = $this->schedulingRepository->all();

        return view('schedulings.index')
            ->with('schedulings', $schedulings);
    }

    /**
     * Show the form for creating a new Scheduling.
     *
     * @return Response
     */
    public function create()
    {
        return view('schedulings.create');
    }

    /**
     * Store a newly created Scheduling in storage.
     *
     * @param CreateSchedulingRequest $request
     *
     * @return Response
     */
    public function store(CreateSchedulingRequest $request)
    {
        $input = $request->all();

        $scheduling = $this->schedulingRepository->create($input);

        Flash::success('Scheduling saved successfully.');

        return redirect(route('schedulings.index'));
    }

    /**
     * Display the specified Scheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $scheduling = $this->schedulingRepository->find($id);

        if (empty($scheduling)) {
            Flash::error('Scheduling not found');

            return redirect(route('schedulings.index'));
        }

        return view('schedulings.show')->with('scheduling', $scheduling);
    }

    /**
     * Show the form for editing the specified Scheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $scheduling = $this->schedulingRepository->find($id);

        if (empty($scheduling)) {
            Flash::error('Scheduling not found');

            return redirect(route('schedulings.index'));
        }

        return view('schedulings.edit')->with('scheduling', $scheduling);
    }

    /**
     * Update the specified Scheduling in storage.
     *
     * @param int $id
     * @param UpdateSchedulingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSchedulingRequest $request)
    {
        $scheduling = $this->schedulingRepository->find($id);

        if (empty($scheduling)) {
            Flash::error('Scheduling not found');

            return redirect(route('schedulings.index'));
        }

        $scheduling = $this->schedulingRepository->update($request->all(), $id);

        Flash::success('Scheduling updated successfully.');

        return redirect(route('schedulings.index'));
    }

    /**
     * Remove the specified Scheduling from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $scheduling = $this->schedulingRepository->find($id);

        if (empty($scheduling)) {
            Flash::error('Scheduling not found');

            return redirect(route('schedulings.index'));
        }

        $this->schedulingRepository->delete($id);

        Flash::success('Scheduling deleted successfully.');

        return redirect(route('schedulings.index'));
    }
}
