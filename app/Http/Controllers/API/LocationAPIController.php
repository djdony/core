<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateLocationAPIRequest;
use App\Http\Requests\API\UpdateLocationAPIRequest;
use App\Models\Location;
use App\Repositories\LocationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class LocationController
 * @package App\Http\Controllers\API
 */

class LocationAPIController extends AppBaseController
{
    /** @var  LocationRepository */
    private $locationRepository;

    public function __construct(LocationRepository $locationRepo)
    {
        $this->locationRepository = $locationRepo;
    }

    /**
     * Display a listing of the Location.
     * GET|HEAD /locations
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $locations = $this->locationRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            $locations->toArray(),
            __('messages.retrieved', ['model' => __('models/locations.plural')])
        );
    }

    /**
     * Store a newly created Location in storage.
     * POST /locations
     *
     * @param CreateLocationAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateLocationAPIRequest $request)
    {
        $input = $request->all();

        $location = $this->locationRepository->create($input);

        return $this->sendResponse(
            $location->toArray(),
            __('messages.saved', ['model' => __('models/locations.singular')])
        );
    }

    /**
     * Display the specified Location.
     * GET|HEAD /locations/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Location $location */
        $location = $this->locationRepository->find($id);

        if (empty($location)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/locations.singular')])
            );
        }

        return $this->sendResponse(
            $location->toArray(),
            __('messages.retrieved', ['model' => __('models/locations.singular')])
        );
    }

    /**
     * Update the specified Location in storage.
     * PUT/PATCH /locations/{id}
     *
     * @param int $id
     * @param UpdateLocationAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLocationAPIRequest $request)
    {
        $input = $request->all();

        /** @var Location $location */
        $location = $this->locationRepository->find($id);

        if (empty($location)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/locations.singular')])
            );
        }

        $location = $this->locationRepository->update($input, $id);

        return $this->sendResponse(
            $location->toArray(),
            __('messages.updated', ['model' => __('models/locations.singular')])
        );
    }

    /**
     * Remove the specified Location from storage.
     * DELETE /locations/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Location $location */
        $location = $this->locationRepository->find($id);

        if (empty($location)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/locations.singular')])
            );
        }

        $location->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/locations.singular')])
        );
    }
}
