<?php

namespace App\Http\Controllers;

use App\Models\RoomModel;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $data = RoomModel::with('establishment')->whereNull('deleted_at')->get();

        return view('admin.rooms.index', ['data' => $data]);
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


    public function edit($id)
    {
        $room = RoomModel::query()->where('id', $id)->whereNull('deleted_at')->first();

        if($room) {
            return view('admin.rooms.form', ['room' => $room]);
        }

        abort('404');
    }

    public function update(Request $request)
    {
        $room = RoomModel::query()->where('id', $request->input('id'))->get()->first();

        $room->name = $request->input('name');
        $room->description = $request->input('description');
        $room->address = $request->input('address');
        $room->photo = $request->input('photo');
        $room->occupancy = $request->input('occupancy');
        $room->price = $request->input('price');
        $room->comments = $request->input('comments');
        $room->establishment_id = $request->input('establishment');
        $room->updated_at = now();

        $room->save();
    }

    public function delete($id)
    {
        $room = RoomModel::query()->where('id', $id)->get()->first();
        $room->deleted_at = now();
        $room->save();
    }
}
