<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Location;
use App\Repositories\BookingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BookingController extends AppBaseController
{
    /** @var  BookingRepository */
    private $bookingRepository;

    public function __construct(BookingRepository $bookingRepo)
    {
        $this->bookingRepository = $bookingRepo;
    }

    /**
     * Display a listing of the Booking.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bookings = $this->bookingRepository->all();
        $locations = Location::where('type', $request['type'])->with('ancestors')->get();

        return view('backend.bookings.index',['locations'=>$locations])
            ->with('bookings', $bookings);
    }

    /**
     * Show the form for creating a new Booking.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.bookings.create');
    }

    /**
     * Store a newly created Booking in storage.
     *
     * @param CreateBookingRequest $request
     *
     * @return Response
     */
    public function store(CreateBookingRequest $request)
    {
        $input = $request->all();

        $booking = $this->bookingRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/bookings.singular')]));

        return redirect(route('admin.bookings.index'));
    }

    /**
     * Display the specified Booking.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $booking = $this->bookingRepository->find($id);

        if (empty($booking)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bookings.singular')]));

            return redirect(route('admin.bookings.index'));
        }

        return view('backend.bookings.show')->with('booking', $booking);
    }

    /**
     * Show the form for editing the specified Booking.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $booking = $this->bookingRepository->find($id);

        if (empty($booking)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bookings.singular')]));

            return redirect(route('admin.bookings.index'));
        }

        return view('backend.bookings.edit')->with('booking', $booking);
    }

    /**
     * Update the specified Booking in storage.
     *
     * @param int $id
     * @param UpdateBookingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBookingRequest $request)
    {
        $booking = $this->bookingRepository->find($id);

        if (empty($booking)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bookings.singular')]));

            return redirect(route('admin.bookings.index'));
        }

        $booking = $this->bookingRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/bookings.singular')]));

        return redirect(route('admin.bookings.index'));
    }

    /**
     * Remove the specified Booking from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $booking = $this->bookingRepository->find($id);

        if (empty($booking)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bookings.singular')]));

            return redirect(route('admin.bookings.index'));
        }

        $this->bookingRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/bookings.singular')]));

        return redirect(route('admin.bookings.index'));
    }
}
