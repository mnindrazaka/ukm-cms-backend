<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ukm;


class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['ukm'] = Ukm::all();
        return view('ukm.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('ukm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|min:5',
            'singkatan' => 'required|string',
        ]);
        $request->merge(['id_ukm'=>uniqid("ukm_")]);

        Ukm::create($request->all());
        return redirect('/ukm');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['ukm'] = Ukm::find($id);
        return view('ukm.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['ukm'] = Ukm::find($id);
        return view('ukm.edit', $data);
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

        Ukm::find($id)->update($request->all());
        return redirect('/ukm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ukm::destroy($id);
        return redirect('/ukm');
    }
}
