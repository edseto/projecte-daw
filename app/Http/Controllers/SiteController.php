<?php

namespace App\Http\Controllers;


use App\Models\Room;

class SiteController extends Controller
{

    public function index()
    {
        $rooms = Room::query()->whereNull('deleted_at')->get();

        return view('welcome', ['rooms' => $rooms]);
    }

}
