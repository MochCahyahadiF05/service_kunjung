<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
class BarangController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('barang.create');
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
            'nama_barang' => 'required',
            'merk' => 'required',
            'stok_barang' => 'required',
            'harga_barang' => 'required',
            ]);
    
            $barang = new Barang();
            $barang->nama_barang = $request->nama_barang;
            $barang->merk = $request->merk;
            $barang->stok_barang = $request->stok_barang;
            $barang->harga_barang = $request->harga_barang;
    
            $barang->save();
            return redirect()->route('barang.index')
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
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
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
            'nama_barang' => 'required',
            'merk' => 'required',
            'stok_barang' => 'required',
            'harga_barang' => 'required',
            ]);
    
            $barang = Barang::findOrFail($id);
            $barang->nama_barang = $request->nama_barang;
            $barang->merk = $request->merk;
            $barang->stok_barang = $request->stok_barang;
            $barang->harga_barang = $request->harga_barang;
    
            $barang->save();
            return redirect()->route('barang.index')
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
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Data berhasil dihapus!');
    }
}
