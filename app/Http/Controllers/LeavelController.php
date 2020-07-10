<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLeavelRequest;
use App\Http\Requests\UpdateLeavelRequest;
use App\Repositories\LeavelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LeavelController extends AppBaseController
{
    /** @var  LeavelRepository */
    private $leavelRepository;

    public function __construct(LeavelRepository $leavelRepo)
    {
        $this->leavelRepository = $leavelRepo;
    }

    /**
     * Display a listing of the Leavel.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $leavels = $this->leavelRepository->all();

        return view('leavels.index')
            ->with('leavels', $leavels);
    }

    /**
     * Show the form for creating a new Leavel.
     *
     * @return Response
     */
    public function create()
    {
        return view('leavels.create');
    }

    /**
     * Store a newly created Leavel in storage.
     *
     * @param CreateLeavelRequest $request
     *
     * @return Response
     */
    public function store(CreateLeavelRequest $request)
    {
        $input = $request->all();

        $leavel = $this->leavelRepository->create($input);

        Flash::success('Leavel saved successfully.');

        return redirect(route('leavels.index'));
    }

    /**
     * Display the specified Leavel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $leavel = $this->leavelRepository->find($id);

        if (empty($leavel)) {
            Flash::error('Leavel not found');

            return redirect(route('leavels.index'));
        }

        return view('leavels.show')->with('leavel', $leavel);
    }

    /**
     * Show the form for editing the specified Leavel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $leavel = $this->leavelRepository->find($id);

        if (empty($leavel)) {
            Flash::error('Leavel not found');

            return redirect(route('leavels.index'));
        }

        return view('leavels.edit')->with('leavel', $leavel);
    }

    /**
     * Update the specified Leavel in storage.
     *
     * @param int $id
     * @param UpdateLeavelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLeavelRequest $request)
    {
        $leavel = $this->leavelRepository->find($id);

        if (empty($leavel)) {
            Flash::error('Leavel not found');

            return redirect(route('leavels.index'));
        }

        $leavel = $this->leavelRepository->update($request->all(), $id);

        Flash::success('Leavel updated successfully.');

        return redirect(route('leavels.index'));
    }

    /**
     * Remove the specified Leavel from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $leavel = $this->leavelRepository->find($id);

        if (empty($leavel)) {
            Flash::error('Leavel not found');

            return redirect(route('leavels.index'));
        }

        $this->leavelRepository->delete($id);

        Flash::success('Leavel deleted successfully.');

        return redirect(route('leavels.index'));
    }
}
