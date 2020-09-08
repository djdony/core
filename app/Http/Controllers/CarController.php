<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Repositories\CarRepository;
use Illuminate\Http\Request;
use Flash;
use Intervention\Image\Facades\Image;
use Response;

class CarController extends AppBaseController
{
    /** @var  CarRepository */
    private $carRepository;

    public function __construct(CarRepository $carRepo)
    {
        $this->carRepository = $carRepo;
    }

    protected function storeImage($image, $resize = null){
        $name = $image->getClientOriginalName();
        $path = $image->storeAs('images',$name, 'local');
        if ($resize){
            Image::make($image)
                ->resize(null,$resize,function ($constraint){
                    $constraint->aspectRatio();
                })
                ->save(public_path().'/images/thumbs/'.$name);
        }

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
     * @param CarRequest $request
     *
     * @return Response
     */
    public function store(CarRequest $request)
    {
        $input = $request->all();
        $car = $this->carRepository->create($input);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $this->storeImage($image,200);
                $car->images()->create(['url' => $image->getClientOriginalName()]);
            }

        }

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
     * @param CarRequest $request
     *
     * @return
     */
    public function update($id, CarRequest $request)
    {
        $car = $this->carRepository->find($id);

        if (empty($car)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cars.singular')]));

            return redirect(route('admin.cars.index'));
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $this->storeImage($image,150);
                $car->images()->updateOrCreate(['url' => $image->getClientOriginalName()]);
            }

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
