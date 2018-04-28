<?php

namespace App\Http\Controllers\Api;

use App\Ukm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UkmController extends Controller
{
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Ukm::find($id);
        return response()->json($data);
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
         $this->validate($request, [
            'nama' => 'required|string|min:5',
            'singkatan' => 'required|string',
        ]);

        $data = Ukm::find($id)->update($request->all());
        return response()->json($data);
    }

}
