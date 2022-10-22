<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        if ($role=='800'){
			$users = $this->getUsersRooms();
			return view('admin.rooms.index', ['users' => $users]);
        }
		else{
			$users = $this->getUsersRooms(1);	//Codi d'usuari hardcoded
			return view('admin.rooms.index', ['users' => $users]);
		}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view ('user.rooms.index');
    }


    public function edit($id)
    {
        $room = Room::query()->where('id', $id)->whereNull('deleted_at')->first();

        if($room) {
            return view('admin.rooms.form', ['room' => $room]);
        }

        abort('404');
    }

    public function update(Request $request)
    {
        $room = Room::query()->where('id', $request->input('id'))->get()->first();

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
        $room = Room::query()->where('id', $id)->get()->first();
        $room->deleted_at = now();
        $room->save();
    }

    private function getUsersRooms($id = null)
    {
        return User::with(['rooms' => function ($q) {
            return $q->whereNull('deleted_at');
        }])->when($id !== null, function ($q) use ($id) {
            return $q->where('id', $id);
        })->whereNull('deleted_at')->get();
    }
}
