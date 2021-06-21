<?php

namespace App\Http\Controllers\admin;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Unit::all();
        $module = 'unit';
        return view('admin.components.common-crud.index', compact('items', 'module'));
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
        $request->validate([
            'name' => 'string|unique:units,name',
        ]);

        Unit::create($request->all());
        notify()->success('Unit has been added', 'Success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Unit $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Unit $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Unit $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        $request->validate([
            'name' => 'required|string',
        ]);
        
        $unit->update($request->all());
        notify()->success('Unit has been updated', 'Success');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Unit $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        $unit->delete();
        notify()->success('Unit has been deleted', 'Success');
        return back();
    }
}
