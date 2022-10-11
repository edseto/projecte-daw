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
        $data = EstablishmentModel::all();
        return view('admin.establishments.index', ['data' => $data]);
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
    public function show($id)
    {
        //TODO: retornar format response error o avís per pantalla
        $establishment = EstablishmentModel::where('id', $id)->first();
        if($establishment != null)
        {
            return view('admin.establishments.form', ['establishment' => $establishment, 'readonly' => "readonly"]);
        } else {
            return false;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstablishmentModel  $establishment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //TODO: retornar format response error o avís per pantalla
        $establishment = EstablishmentModel::where('id', $id)->first();
        if($establishment != null)
        {
            return view('admin.establishments.form', ['establishment' => $establishment]);
        } else {
            return false;
        }
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
