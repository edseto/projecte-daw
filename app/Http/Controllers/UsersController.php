<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        // ...
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = UserModel::query()->whereNull('deleted_at')->get();
        return view('admin.users.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new UserModel();
        return view('admin.users.form', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new UserModel();

        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->password = strlen($request->input('password')) > 0 ? : "";
        $user->nif = $request->input('nif');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->postal_code = $request->input('postal_code');
        $user->profile_photo = strlen($request->input('profile_photo')) > 0 ? : "";
        $user->created_at = now();
        $user->updated_at = now();

        $user->save();

        return redirect()->route('admin.users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = UserModel::where('id', $id)->first();
        if($user != null)
        {
            return view('admin.users.form', ['user' => $user, 'readonly' => "readonly"]);
        } else {
            abort('404');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = UserModel::where('id', $id)->first();
        if($user != null)
        {
            return view('admin.users.form', ['user' => $user]);
        } else {
            abort('404');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = UserModel::query()->where('id', $request->input('id'))->get()->first();

        if ($user != null)
        {
            $user->name = $request->input('name');
            $user->username = $request->input('username');
            $user->password = strlen($request->input('password')) > 0 ? : "";
            $user->nif = $request->input('nif');
            $user->address = $request->input('address');
            $user->city = $request->input('city');
            $user->postal_code = $request->input('postal_code');
            $user->profile_photo = strlen($request->input('profile_photo')) > 0 ? : "";
            $user->updated_at = now();
    
            $user->save();
        }

        return redirect()->route('admin.users');
    }

    /**
     * Soft deletes the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = UserModel::where('id', $id)->first();
        if($user != null)
        {
            $user->deleted_at = now();
            $user->save();
        }
        
        return redirect()->route('admin.users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
