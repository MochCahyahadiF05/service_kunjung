<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Barang;
use App\Models\Mekanik;

class ServiceController extends Controller
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
        // $buku = DB::table('users')
        //         ->join('services', 'users.id', '=', 'service.user_id')
        //         ->select('service.nama', 'service.no_polisi', 'service.tgl_boking','service.jumlah','')
        //         ->where()
        //         ->get();
        $service = Service::with('barang')->get();
        $service = Service::with('mekanik')->get();

        return view('service.index',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        $mekanik = Mekanik::all();
        return view('service.create', compact('barang','mekanik'));
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
            'nama'=> 'required',
            'no_polisi' => 'required',
            'tgl_boking' => 'required',
            'jenis_service' => 'required',
            'jumlah' => 'required',
            'alamat'=>'required',
            'no_hp'=>'required',
            'id_user' => 'required',
            'id_barang' => 'required',
            // 'id_mekanik' => 'required|unique:services',
            ]);
    
            $service = new Service();
            $service->nama = $request->nama;
            $service->id_user = $request->id_user;
            $service->no_polisi = $request->no_polisi;
            $service->tgl_boking = $request->tgl_boking;
            $service->jenis_service = $request->jenis_service;
            $service->jumlah = $request->jumlah;
            $service->alamat = $request->alamat;
            $service->no_hp = $request->no_hp;
            $service->id_barang = $request->id_barang;
            // $service->id_mekanik = $request->id_mekanik;

            $service->save();
            return redirect()->route('service.index')
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('service.index')->with('success', 'Data berhasil dihapus!');
    }
    public function lapora(){
        return view('service.laporan');
    }
}
