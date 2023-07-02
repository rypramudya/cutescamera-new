<?php

namespace App\Http\Controllers;

use App\Models\Kamera;
use Illuminate\Http\Request;


class KameraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kamera::orderBy('id_kamera', 'asc')->paginate(5);
        return view('kamera.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kamera.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_kamera'=>'required',
            'nama_kamera'=>'required',
            'keterangan'=>'required',
            'harga_sewa'=>'required',
            'stok_kamera'=>'required',
            'type_kamera'=>'required',
            'image_kamera'=>'image|mimes:jpeg,png,jpg|max:2048',

        ]);

        $data = [
            'id_kamera'=>$request->input('id_kamera'),
            'nama_kamera'=>$request->input('nama_kamera'),
            'keterangan'=>$request->input('keterangan'),
            'harga_sewa'=>$request->input('harga_sewa'),
            'stok_kamera'=>$request->input('stok_kamera'),
            'type_kamera'=>$request->input('type_kamera'),
            'image_kamera'=>$request->input('image_kamera'),
        ];
        Kamera::create($data);
        return redirect('/kamera');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
