<?php

namespace App\Http\Controllers;

use App\Models\ServiceModel;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
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
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceModel  $service
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceModel $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceModel  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceModel $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\ServiceModel  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, ServiceModel $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceModel  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceModel $service)
    {
        //
    }
}
