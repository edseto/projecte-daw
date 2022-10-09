<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
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
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserModel  $user
     * @return \Illuminate\Http\Response
     */
    public function show(UserModel $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserModel  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(UserModel $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\UserModel  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, UserModel $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserModel  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserModel $user)
    {
        //
    }
}
