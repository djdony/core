<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Repositories\CarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CarController extends AppBaseController
{
    /** @var  CarRepository */
    private $carRepository;

    public function __construct(CarRepository $carRepo)
    {
        $this->carRepository = $carRepo;
    }

    /**
     * Display a listing of the Car.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cars = $this->carRepository->all();

        return view('backend.cars.index')
            ->with('cars', $cars);
    }

    /**
     * Show the form for creating a new Car.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.cars.create');
    }

    /**
     * Store a newly created Car in storage.
     *
     * @param CreateCarRequest $request
     *
     * @return Response
     */
    public function store(CreateCarRequest $request)
    {
        $input = $request->all();

        $car = $this->carRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/cars.singular')]));

        return redirect(route('admin.cars.index'));
    }

    /**
     * Display the specified Car.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $car = $this->carRepository->find($id);

        if (empty($car)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cars.singular')]));

            return redirect(route('admin.cars.index'));
        }

        return view('backend.cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified Car.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $car = $this->carRepository->find($id);

        if (empty($car)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cars.singular')]));

            return redirect(route('admin.cars.index'));
        }

        return view('backend.cars.edit')->with('car', $car);
    }

    /**
     * Update the specified Car in storage.
     *
     * @param int $id
     * @param UpdateCarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCarRequest $request)
    {
        $car = $this->carRepository->find($id);

        if (empty($car)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cars.singular')]));

            return redirect(route('admin.cars.index'));
        }

        $car = $this->carRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/cars.singular')]));

        return redirect(route('admin.cars.index'));
    }

    /**
     * Remove the specified Car from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $car = $this->carRepository->find($id);

        if (empty($car)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cars.singular')]));

            return redirect(route('admin.cars.index'));
        }

        $this->carRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/cars.singular')]));

        return redirect(route('admin.cars.index'));
    }
}
