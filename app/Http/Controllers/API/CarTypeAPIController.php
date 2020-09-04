<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCarTypeAPIRequest;
use App\Http\Requests\API\UpdateCarTypeAPIRequest;
use App\Models\CarType;
use App\Repositories\CarTypeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class CarTypeController
 * @package App\Http\Controllers\API
 */

class CarTypeAPIController extends AppBaseController
{
    /** @var  CarTypeRepository */
    private $carTypeRepository;

    public function __construct(CarTypeRepository $carTypeRepo)
    {
        $this->carTypeRepository = $carTypeRepo;
    }

    /**
     * Display a listing of the CarType.
     * GET|HEAD /carTypes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $carTypes = $this->carTypeRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            $carTypes->toArray(),
            __('messages.retrieved', ['model' => __('models/carTypes.plural')])
        );
    }

    /**
     * Store a newly created CarType in storage.
     * POST /carTypes
     *
     * @param CreateCarTypeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCarTypeAPIRequest $request)
    {
        $input = $request->all();

        $carType = $this->carTypeRepository->create($input);

        return $this->sendResponse(
            $carType->toArray(),
            __('messages.saved', ['model' => __('models/carTypes.singular')])
        );
    }

    /**
     * Display the specified CarType.
     * GET|HEAD /carTypes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var CarType $carType */
        $carType = $this->carTypeRepository->find($id);

        if (empty($carType)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/carTypes.singular')])
            );
        }

        return $this->sendResponse(
            $carType->toArray(),
            __('messages.retrieved', ['model' => __('models/carTypes.singular')])
        );
    }

    /**
     * Update the specified CarType in storage.
     * PUT/PATCH /carTypes/{id}
     *
     * @param int $id
     * @param UpdateCarTypeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCarTypeAPIRequest $request)
    {
        $input = $request->all();

        /** @var CarType $carType */
        $carType = $this->carTypeRepository->find($id);

        if (empty($carType)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/carTypes.singular')])
            );
        }

        $carType = $this->carTypeRepository->update($input, $id);

        return $this->sendResponse(
            $carType->toArray(),
            __('messages.updated', ['model' => __('models/carTypes.singular')])
        );
    }

    /**
     * Remove the specified CarType from storage.
     * DELETE /carTypes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var CarType $carType */
        $carType = $this->carTypeRepository->find($id);

        if (empty($carType)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/carTypes.singular')])
            );
        }

        $carType->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/carTypes.singular')])
        );
    }
}
