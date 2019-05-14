<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\CourseType;

class CourseTypeController extends Controller
{
    public function __construct(CourseType $courseType)
    {
       $this->courseType = $courseType;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseTypes = $this->courseType->all();
        return response([
            'status' => true,
            'courseTypes' => $courseTypes
        ], 200);
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
        $dataForm = $request->all();
        $courseType = $this->courseType->create($dataForm);

        return response([
            'status' => true,
            'courseType' => $courseType
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
        $courseType = $this->courseType->findOrFail($id);
        return response([
            'status' => true,
            'courseType' => $courseType
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
        $courseType = $this->courseType->find($id)->update($dataForm);    

        return response([
            'status' => true,
            'courseType' => $courseType
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
        $courseType = $this->courseType->find($id)->delete($id);

        return response([
            'status' => true,
            'courseType' => $courseType
        ], 200);
    }
}
