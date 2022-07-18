<?php

namespace App\Http\Controllers;
use App\Models\registr;
use App\Http\Requests\StoreregistrRequest;
use App\Http\Requests\UpdateregistrRequest;

class RegistrController extends Controller
{
    public function getall(){

        $data = registr::all();
        return view('register' , compact('data'));
    }

    public function getid()
    {
        $id = request('id');
        $data = registr::where('id', $id)->first();
        return view('register_id', compact('data'));
    }
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
     * @param  \App\Http\Requests\StoreregistrRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreregistrRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registr  $registr
     * @return \Illuminate\Http\Response
     */
    public function show(registr $registr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registr  $registr
     * @return \Illuminate\Http\Response
     */
    public function edit(registr $registr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateregistrRequest  $request
     * @param  \App\Models\registr  $registr
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateregistrRequest $request, registr $registr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registr  $registr
     * @return \Illuminate\Http\Response
     */
    public function destroy(registr $registr)
    {
        //
    }
}
