<?php

namespace App\Http\Controllers;

use App\Models\BookingStatus;
use App\Http\Requests\StoreBookingStatusRequest;
use App\Http\Requests\UpdateBookingStatusRequest;

class BookingStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BookingStatus $bookingStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookingStatus $bookingStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingStatusRequest $request, BookingStatus $bookingStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookingStatus $bookingStatus)
    {
        //
    }
}
