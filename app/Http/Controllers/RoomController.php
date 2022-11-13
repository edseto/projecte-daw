<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\User;

class RoomController extends Controller
{
    public function index()
    {
        $role = auth()->user() != null ? auth()->user()->role : '0';

        if ($role=='800'){
			$users = $this->getUsersRooms();
        }
		else
        {
            $user_id = auth()->user() != null ? auth()->user()->id : null;
			$users = $this->getUsersRooms($user_id);
        }

        return view('admin.rooms.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $room = new Room();
        return view('user.rooms.form', ['room' => $room]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoomRequest $request)
    {
        $room = new Room();

        $room->name = $request->input('name');
        $room->description = $request->input('description');
        $room->address = $request->input('address');
        if($request->hasFile('photo')){
            $room->photo = $request->photo->getClientOriginalName();
            $request->photo->storeAs('images', $request->photo->getClientOriginalName());
        }
        $room->occupancy = $request->input('occupancy');
        $room->price = $request->input('price');
        $room->comments = $request->input('comments');
        $room->establishment_id = $request->input('establishment');
        $room->updated_at = now();

        $room->save();

        return redirect()->route('admin.rooms');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::query()->where('id', $id)->whereNull('deleted_at')->first();
        if($room) {
            return view('user.rooms.show', ['room' => $room]);
        }

        abort('404');
    }


    public function edit($id)
    {
        $room = Room::query()->where('id', $id)->whereNull('deleted_at')->first();

        if($room) {
            return view('admin.rooms.form', ['room' => $room]);
        }

        abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoomRequest $request)
    {
        $room = Room::query()->where('id', $request->input('id'))->get()->first();

        $room->name = $request->input('name');
        $room->description = $request->input('description');
        $room->address = $request->input('address');
        if($request->hasFile('photo')){
            $room->photo = $request->photo->getClientOriginalName();
            $request->photo->storeAs('images', $request->photo->getClientOriginalName());
        }
        $room->occupancy = $request->input('occupancy');
        $room->price = $request->input('price');
        $room->comments = $request->input('comments');
        $room->establishment_id = $request->input('establishment');
        $room->updated_at = now();

        $room->save();

        return redirect()->route('admin.rooms');
    }

    public function delete($id)
    {
        $room = Room::query()->where('id', $id)->get()->first();
        $room->deleted_at = now();
        $room->save();

        return redirect()->route('admin.rooms');
    }

    private function getUsersRooms($id = null)
    {
        return User::with(['rooms' => function ($q) {
            return $q->whereNull('deleted_at');
        }])->when($id !== null, function ($q) use ($id) {
            return $q->where('id', $id);
        })->whereNull('deleted_at')->get();
    }

    private function getBookingsByRoom($id = null)
    {
        $ret = [];

        if($id != null)
        {
            $ret = Booking::query()->where([['room_id', '=', $id], ['date_booking', '>', date_create()]])->all();
        }

        return $ret;
    }
}
