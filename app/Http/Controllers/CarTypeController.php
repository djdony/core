<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarTypeRequest;
use App\Http\Requests\UpdateCarTypeRequest;
use App\Repositories\CarTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CarTypeController extends AppBaseController
{
    /** @var  CarTypeRepository */
    private $carTypeRepository;

    public function __construct(CarTypeRepository $carTypeRepo)
    {
        $this->carTypeRepository = $carTypeRepo;
    }

    /**
     * Display a listing of the CarType.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $carTypes = $this->carTypeRepository->all();

        return view('backend.car_types.index')
            ->with('carTypes', $carTypes);
    }

    /**
     * Show the form for creating a new CarType.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.car_types.create');
    }

    /**
     * Store a newly created CarType in storage.
     *
     * @param CreateCarTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateCarTypeRequest $request)
    {
        $input = $request->all();

        $carType = $this->carTypeRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/carTypes.singular')]));

        return redirect(route('admin.carTypes.index'));
    }

    /**
     * Display the specified CarType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $carType = $this->carTypeRepository->find($id);

        if (empty($carType)) {
            Flash::error(__('messages.not_found', ['model' => __('models/carTypes.singular')]));

            return redirect(route('admin.carTypes.index'));
        }

        return view('backend.car_types.show')->with('carType', $carType);
    }

    /**
     * Show the form for editing the specified CarType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $carType = $this->carTypeRepository->find($id);

        if (empty($carType)) {
            Flash::error(__('messages.not_found', ['model' => __('models/carTypes.singular')]));

            return redirect(route('admin.carTypes.index'));
        }

        return view('backend.car_types.edit')->with('carType', $carType);
    }

    /**
     * Update the specified CarType in storage.
     *
     * @param int $id
     * @param UpdateCarTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCarTypeRequest $request)
    {
        $carType = $this->carTypeRepository->find($id);

        if (empty($carType)) {
            Flash::error(__('messages.not_found', ['model' => __('models/carTypes.singular')]));

            return redirect(route('admin.carTypes.index'));
        }

        $carType = $this->carTypeRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/carTypes.singular')]));

        return redirect(route('admin.carTypes.index'));
    }

    /**
     * Remove the specified CarType from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $carType = $this->carTypeRepository->find($id);

        if (empty($carType)) {
            Flash::error(__('messages.not_found', ['model' => __('models/carTypes.singular')]));

            return redirect(route('admin.carTypes.index'));
        }

        $this->carTypeRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/carTypes.singular')]));

        return redirect(route('admin.carTypes.index'));
    }
}
