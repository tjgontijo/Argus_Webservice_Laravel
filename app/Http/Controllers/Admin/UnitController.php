<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Unit;

class UnitController extends Controller
{
    public function __construct(Unit $unit)
    {
       $this->unit = $unit;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = $this->unit->all();
        return response([
            'status' => true,
            'units' => $units
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataForm = $request->all();
        $unit = $this->unit->create($dataForm);

        return response([
            'status' => true,
            'unit' => $unit
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unit = $this->unit->findOrFail($id);
        return response([
            'status' => true,
            'unit' => $unit
        ], 200);
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
        $dataForm = $request->all();
        $unit = $this->unit->find($id)->update($dataForm);    

        return response([
            'status' => true,
            'unit' => $unit
        ], 200);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = $this->unit->find($id)->delete($id);

        return response([
            'status' => true,
            'unit' => $unit
        ], 200);
    }
}
