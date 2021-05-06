<?php

namespace App\Http\Controllers;

use App\Models\Knjiga;
use App\Models\Povez;
use Illuminate\Http\Request;

class PovezController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $knjige = Knjiga::query()->orderByDesc('id')->paginate(10);

        return view('povez.index', compact('knjige'));

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Povez  $povez
     * @return \Illuminate\Http\Response
     */
    public function show(Povez $povez)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Povez  $povez
     * @return \Illuminate\Http\Response
     */
    public function edit(Povez $povez)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Povez  $povez
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Povez $povez)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Povez  $povez
     * @return \Illuminate\Http\Response
     */
    public function destroy(Povez $povez)
    {
        //
    }
}
