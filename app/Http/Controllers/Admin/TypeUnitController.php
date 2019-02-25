<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\TypeUnit;

class TypeUnitController extends Controller
{
    public function __construct(TypeUnit $type_unit)
    {
       $this->type_unit = $type_unit;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_units = $this->type_unit->all();
        return response([
            'status' => true,
            'typeUnits' => $type_units
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
        $type_unit = $this->type_unit->create($dataForm);

        return response([
            'status' => true,
            'typeUnit' => $type_unit
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
        $type_unit = $this->type_unit->findOrFail($id);
        return response([
            'status' => true,
            'typeUnit' => $type_unit
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
        $type_unit = $this->type_unit->find($id)->update($dataForm);    

        return response([
            'status' => true,
            'typeUnit' => $type_unit
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
        $type_unit = $this->type_unit->find($id)->delete($id);

        return response([
            'status' => true,
            'typeUnit' => $type_unit
        ], 200);
    }
}
