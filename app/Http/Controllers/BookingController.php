<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostServiceBookingRequest;
use App\Models\Booking;
use Carbon\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('bookings.index');
    }

    public function create(): View|Factory
    {
        return view('bookings.create');
    }

    /**
     * Store new service request
     */
    public function store(PostServiceBookingRequest $request): RedirectResponse
    {
        $request = $request->validated();
        dd(Booking::create($request));
        return back()->with('success', 'Successfully added new service request.');
    }
}
