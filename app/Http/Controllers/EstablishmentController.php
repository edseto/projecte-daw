<?php

namespace App\Http\Controllers;

use App\Models\EstablishmentModel;
use App\Http\Requests\StoreEstablishmentRequest;
use App\Http\Requests\UpdateEstablishmentRequest;

class EstablishmentController extends Controller
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
     * @param  \App\Http\Requests\StoreEstablishmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstablishmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstablishmentModel  $establishment
     * @return \Illuminate\Http\Response
     */
    public function show(EstablishmentModel $establishment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstablishmentModel  $establishment
     * @return \Illuminate\Http\Response
     */
    public function edit(EstablishmentModel $establishment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstablishmentRequest  $request
     * @param  \App\Models\EstablishmentModel  $establishment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstablishmentRequest $request, EstablishmentModel $establishment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstablishmentModel  $establishment
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstablishmentModel $establishment)
    {
        //
    }
}
