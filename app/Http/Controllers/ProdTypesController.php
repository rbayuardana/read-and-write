<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdType;

class ProdTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodtypes = ProdType::all();
        return view('welcome', compact('prodtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodtypes = ProdType::all();
        return view('prodtype.create', compact('prodtypes'));
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
            'typename' => 'required|unique:prodtypes,nama',
            'typeimg' => 'required|file|image'
        ]);

        Prodtype::create([
            'nama' => $request-> typename,
            'img' => $request->file('typeimg')->store('uploads', 'public')
        ]);
        // $this->storeProdType($request);
        // ProdType::create($request->all());
        return redirect('/home');
    }

    // private function storeProdType($request){
    //     $request->update([
    //         'typeimg' => request()->img->store('uploads','public')
    //     ]);
    // }

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
    public function edit()
    {
        $prodtypes = ProdType::all();
        return view('prodtype.update', compact('prodtypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdType $prodtype)
    {
        $request->validate([
            'typename' => 'required|unique:prodtypes,nama',
        ]);

        ProdType::where('id',$prodtype->id)
        ->update([
            'nama' => $request-> typename,
            
        ]);
        // $this->storeProdType($request);
        // ProdType::create($request->all());
        return redirect('prodtypes/update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdType $prodtype)
    {
        ProdType::destroy($prodtype->id);
        return redirect('prodtypes/update');
    }
}
