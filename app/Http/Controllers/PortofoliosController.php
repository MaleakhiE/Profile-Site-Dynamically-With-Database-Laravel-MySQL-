<?php

namespace App\Http\Controllers;

use App\Models\Portofolios;
use Illuminate\Http\Request;

class PortofoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofolios = portofolios::all();

        return view('portofolio.index', compact('portofolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portofolio.create');
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
            'name'=>'required', 
            'description'=>'required', 
            'image'=>'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')){
            $destinationPath = 'images/fotoporto/';
            $imageName = date('Ymd') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Portofolios::create($input);
        return redirect('/admin/portofolios')->with('message','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolios  $portofolios
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolios $portofolios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolios  $portofolios
     * @return \Illuminate\Http\Response
     */
    public function edit($portofolios)
    {
        $portofolios = portofolios::whereId($portofolios)->first();
        return view('portofolio.edit', compact('portofolios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolios  $portofolios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $portofolios)
    {
        $portofolios = portofolios::whereId($portofolios)->first();
        $request->validate([
            'name'=>'required', 
            'description'=>'required', 
            'image'=>'image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')){
            $destinationPath = 'images/fotoporto/';
            $imageName = date('Ymd') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }else{
            unset($input['image']);
        }
        $portofolios->update($input);
        return redirect('/admin/portofolios')->with('message','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolios  $portofolios
     * @return \Illuminate\Http\Response
     */
    public function destroy($portofolios)
    {
        $portofolios = portofolios::whereId($portofolios)->first();
        $portofolios->delete();

        return redirect('/admin/portofolios')->with('message','Data Berhasil Dihapus');
    }
}
