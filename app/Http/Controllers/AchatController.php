<?php

namespace App\Http\Controllers;

use App\Models\Achat;
use Illuminate\Http\Request;

class AchatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $achats = Achat::latest()->paginate(5);
        return view('achat.index', compact('achats'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
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
     * @param \App\Achat $achats
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $achat = Achat::where('id', $id)->firstOrFail();
        $marchand = $achat->marchand->nom_marchand;
        return view('achat.show', compact('achat', 'marchand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Achat\ $achat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achat $achat)
    {
        $achat->delete();

        return redirect()->route('achat.index')
            ->with('success');
    }
}
