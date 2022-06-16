<?php

namespace App\Http\Controllers;

use App\Models\Menures;
use Illuminate\Http\Request;

class MenuResController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menures = Menures::all();
        return view("menures", compact('menures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tambah");
    }

    public function tambah()
    {
        return view("tambah");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Menures::create($request->all());
        return redirect()->route("menures");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Menures::find($id);
        return view("edit", compact('menures'));
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
        $item = Menures::find($id);
        $item->update($request->all());
        return redirect()->route('menures');
    }

    public function tampilkandata($id)
    {
        $menures = Menures::find($id);
        return view("update", compact('menures'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $item = Menures::find($id);
        $item->delete();
        return redirect()->route('menures')->with('success', 'Data Berhasil Dihapus');
    }
}
