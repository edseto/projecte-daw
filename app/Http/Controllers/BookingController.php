<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    public function getBookingsByRoom($id)
    {
        //TODO: Buscar tots els dies reservats per id d'habitació i retornar-los en format js
        $ret = [];

        if($id != null)
        {
            $query = Booking::query()->where([['room_id', '=', $id], ['initial_date', '>=', date_create()]])->get();

            foreach($query as $obj)
            {
                array_push($ret, $obj->initial_date);
            }
        }

        return json_encode($ret);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingRequest $request)
    {
        $booking = new Booking();

        $user_id = auth()->user() != null ? auth()->user()->id : null;
        $booking->user_id = $user_id;
        $booking->room_id = $request->input('room_id');
        $booking->total_price = $request->input('total_price');
        $booking->people_amount = $request->input('people_amount');

        if($request->input('initial_date') != null)
        {
            $day = explode('/', $request->input('initial_date'))[0];
            $month = explode('/', $request->input('initial_date'))[1];
            $year = explode('/', $request->input('initial_date'))[2];
            $booking->initial_date = date_create($year.'-'.$month.'-'.$day);
        }
        else
        {
            $booking->initial_date = now();
        }

        if($request->input('final_date') != null)
        {
            $day = explode('/', $request->input('final_date'))[0];
            $month = explode('/', $request->input('final_date'))[1];
            $year = explode('/', $request->input('final_date'))[2];
            $booking->final_date = date_create($year.'-'.$month.'-'.$day);
        }
        else
        {
            $booking->final_date = now();
        }
        
        $booking->created_at = now();
        $booking->updated_at = now();

        $booking->save();

        //TODO: Missatge reserva correcta
        return redirect()->route('landing');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingRequest  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
