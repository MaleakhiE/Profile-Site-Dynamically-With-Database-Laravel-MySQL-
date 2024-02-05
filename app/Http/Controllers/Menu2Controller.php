<?php

namespace App\Http\Controllers;

use App\Models\Menu2;
use Illuminate\Http\Request;

class Menu2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu2 = menu2::all();

        return view('menu2.index', compact('menu2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu2.create');
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
            'judul'=>'required', 
            'description'=>'required',
        ]);

        $input = $request->all();

        menu2::create($input);
        return redirect('/admin/menu2')->with('message','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu2  $menu2
     * @return \Illuminate\Http\Response
     */
    public function show(menu2 $menu2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu2  $menu2
     * @return \Illuminate\Http\Response
     */
    public function edit($menu2)
    {
        $menu2 = menu2::whereId($menu2)->first();
        return view('menu2.edit', compact('menu2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu2  $menu2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $menu2)
    {
        $menu2 = menu2::whereId($menu2)->first();
        $request->validate([
            'judul'=>'required', 
            'description'=>'required'
        ]);

        $input = $request->all();
        $menu2->update($input);
        return redirect('/admin/menu2')->with('message','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu2  $menu2
     * @return \Illuminate\Http\Response
     */
    public function destroy($menu2)
    {
        $menu2 = menu2::whereId($menu2)->first();
        $menu2->delete();

        return redirect('/admin/menu2')->with('message','Data Berhasil Dihapus');
    }
}
