<?php

namespace App\Http\Controllers;

use App\Models\RoomModel;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;

class RoomController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomModel  $room
     * @return \Illuminate\Http\Response
     */
    public function show(RoomModel $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomModel  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomModel $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomRequest  $request
     * @param  \App\Models\RoomModel  $room
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoomRequest $request, RoomModel $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomModel  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomModel $room)
    {
        //
    }
}
