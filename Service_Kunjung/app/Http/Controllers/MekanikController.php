<?php

namespace App\Http\Controllers;
use App\Models\Mekanik;
use Illuminate\Http\Request;

class MekanikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mekanik = Mekanik::all();
        return view('mekanik.index',compact('mekanik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mekanik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_mekanik' => 'required',
            'no_hp' => 'required',
            ]);
    
            $mekanik = new Mekanik();
            $mekanik->nama_mekanik = $request->nama_mekanik;
            $mekanik->no_hp = $request->no_hp;
            
    
            $mekanik->save();
            return redirect()->route('mekanik.index')
                ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mekanik = Mekanik::findOrFail($id);
        return view('mekanik.show',compact('mekanik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mekanik = Mekanik::findOrFail($id);
        return view('mekanik.edit',compact('mekanik'));
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
        $validated = $request->validate([
            'nama_mekanik' => 'required',
            'no_telp' => 'required',
            ]);
    
            $mekanik =Mekanik::findOrFail($id);
            $mekanik->nama_mekanik = $request->nama_mekanik;
            $mekanik->no_telp = $request->no_telp;
            
    
            $mekanik->save();
            return redirect()->route('mekanik.index')
                ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mekanik = Mekanik::findOrFail($id);
        $mekanik->delete();
        return redirect()->route('mekanik.index')->with('success', 'Data berhasil dihapus!');
    }
}
