<?php

namespace App\Http\Controllers;

use App\Models\EstablishmentModel;
use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = EstablishmentModel::query()->whereNull('deleted_at')->get();
        return view('admin.establishments.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $establishment = new EstablishmentModel();
        return view('admin.establishments.form', ['establishment' => $establishment]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $establishment = new EstablishmentModel();

        $establishment->name = $request->input('name');
        $establishment->description = $request->input('description');
        $establishment->address = $request->input('address');
        $establishment->image = strlen($request->input('image')) > 0 ? $request->input('image') : "";
        $establishment->city = $request->input('city');
        $establishment->establishment_type = $request->input('establishment_type');
        $establishment->postal_code = $request->input('postal_code');
        $establishment->user_id = 1;
        $establishment->created_at = now();
        $establishment->updated_at = now();

        $establishment->save();

        return redirect()->route('admin.establishments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstablishmentModel  $establishment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $establishment = EstablishmentModel::where('id', $id)->first();
        if($establishment != null)
        {
            return view('admin.establishments.form', ['establishment' => $establishment, 'readonly' => "readonly"]);
        } else {
            abort('404');
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
        $establishment = EstablishmentModel::where('id', $id)->first();
        if($establishment != null)
        {
            return view('admin.establishments.form', ['establishment' => $establishment]);
        } else {
            abort('404');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $establishment = EstablishmentModel::query()->where('id', $request->input('id'))->get()->first();

        if ($establishment != null)
        {
            $establishment->name = $request->input('name');
            $establishment->description = $request->input('description');
            $establishment->address = $request->input('address');
            $establishment->image = strlen($request->input('image')) > 0 ? $request->input('image') : "";
            $establishment->city = $request->input('city');
            $establishment->establishment_type = $request->input('establishment_type');
            $establishment->postal_code = $request->input('postal_code');
            $establishment->user_id = 1;
            $establishment->updated_at = now();
    
            $establishment->save();
        }

        return redirect()->route('admin.establishments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstablishmentModel  $establishment
     * @return \Illuminate\Http\Response
     */
    public function delete(int $id)
    {
        $user = EstablishmentModel::where('id', $id)->first();
        if($user != null)
        {
            $user->deleted_at = now();
            $user->save();
        }
        
        return redirect()->route('admin.establishments');
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
