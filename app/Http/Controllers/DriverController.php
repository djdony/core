<?php

namespace App\Http\Controllers;

use App\Http\Requests\DriverRequest;
use App\Repositories\DriverRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class DriverController extends AppBaseController
{
    /** @var  DriverRepository */
    private $driverRepository;

    public function __construct(DriverRepository $driverRepo)
    {
        $this->driverRepository = $driverRepo;
    }

    /**
     * Display a listing of the Driver.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $drivers = $this->driverRepository->all();

        return view('backend.drivers.index')
            ->with('drivers', $drivers);
    }

    /**
     * Show the form for creating a new Driver.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.drivers.create');
    }

    /**
     * Store a newly created Driver in storage.
     *
     * @param DriverRequest $request
     *
     * @return Response
     */
    public function store(DriverRequest $request)
    {
        $input = $request->all();

        $driver = $this->driverRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/drivers.singular')]));

        return redirect(route('admin.drivers.index'));
    }

    /**
     * Display the specified Driver.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $driver = $this->driverRepository->find($id);

        if (empty($driver)) {
            Flash::error(__('messages.not_found', ['model' => __('models/drivers.singular')]));

            return redirect(route('admin.drivers.index'));
        }

        return view('backend.drivers.show')->with('driver', $driver);
    }

    /**
     * Show the form for editing the specified Driver.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $driver = $this->driverRepository->find($id);

        if (empty($driver)) {
            Flash::error(__('messages.not_found', ['model' => __('models/drivers.singular')]));

            return redirect(route('admin.drivers.index'));
        }

        return view('backend.drivers.edit')->with('driver', $driver);
    }

    /**
     * Update the specified Driver in storage.
     *
     * @param int $id
     * @param DriverRequest $request
     *
     * @return Response
     */
    public function update($id, DriverRequest $request)
    {
        $driver = $this->driverRepository->find($id);

        if (empty($driver)) {
            Flash::error(__('messages.not_found', ['model' => __('models/drivers.singular')]));

            return redirect(route('admin.drivers.index'));
        }

        $driver = $this->driverRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/drivers.singular')]));

        return redirect(route('admin.drivers.index'));
    }

    /**
     * Remove the specified Driver from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $driver = $this->driverRepository->find($id);

        if (empty($driver)) {
            Flash::error(__('messages.not_found', ['model' => __('models/drivers.singular')]));

            return redirect(route('admin.drivers.index'));
        }

        $this->driverRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/drivers.singular')]));

        return redirect(route('admin.drivers.index'));
    }
}
