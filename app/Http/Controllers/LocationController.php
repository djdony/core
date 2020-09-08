<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Repositories\LocationRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class LocationController extends AppBaseController
{
    /** @var  LocationRepository */
    private $locationRepository;

    public function __construct(LocationRepository $locationRepo)
    {
        $this->locationRepository = $locationRepo;
    }

    /**
     * Display a listing of the Location.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $locations = $this->locationRepository->all();

        return view('backend.locations.index')
            ->with('locations', $locations);
    }

    /**
     * Show the form for creating a new Location.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.locations.create');
    }

    /**
     * Store a newly created Location in storage.
     *
     * @param LocationRequest $request
     *
     * @return Response
     */
    public function store(LocationRequest $request)
    {
        $input = $request->all();

        $location = $this->locationRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/locations.singular')]));

        return redirect(route('admin.locations.index'));
    }

    /**
     * Display the specified Location.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $location = $this->locationRepository->find($id);

        if (empty($location)) {
            Flash::error(__('messages.not_found', ['model' => __('models/locations.singular')]));

            return redirect(route('admin.locations.index'));
        }

        return view('backend.locations.show')->with('location', $location);
    }

    /**
     * Show the form for editing the specified Location.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $location = $this->locationRepository->find($id);

        if (empty($location)) {
            Flash::error(__('messages.not_found', ['model' => __('models/locations.singular')]));

            return redirect(route('admin.locations.index'));
        }

        return view('backend.locations.edit')->with('location', $location);
    }

    /**
     * Update the specified Location in storage.
     *
     * @param int $id
     * @param LocationRequest $request
     *
     * @return Response
     */
    public function update($id, LocationRequest $request)
    {
        $location = $this->locationRepository->find($id);

        if (empty($location)) {
            Flash::error(__('messages.not_found', ['model' => __('models/locations.singular')]));

            return redirect(route('admin.locations.index'));
        }

        $location = $this->locationRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/locations.singular')]));

        return redirect(route('admin.locations.index'));
    }

    /**
     * Remove the specified Location from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $location = $this->locationRepository->find($id);

        if (empty($location)) {
            Flash::error(__('messages.not_found', ['model' => __('models/locations.singular')]));

            return redirect(route('admin.locations.index'));
        }

        $this->locationRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/locations.singular')]));

        return redirect(route('admin.locations.index'));
    }
}
