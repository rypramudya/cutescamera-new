<?php

namespace App\Http\Controllers;

use App\Models\Kamera;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class KameraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kamera::orderBy('id_kamera', 'asc')->paginate(10);
        return view('kamera.index')->with('data',$data);
    }

    public function landing()
    {
        $data = Kamera::orderBy('id_kamera', 'asc')->paginate(4);
        return view('landingpage')->with('data',$data);
    }

    public function katalog()
    {
        $data = \App\Models\Kamera::all();
        return view('katalog')->with('data',$data);
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
            'image_kamera'=>'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        $image_file = $request->file('image_kamera');
        $image_ekstensi = $image_file->extension();
        $image_nama = date('ymdhis') .".". $image_ekstensi;
        $image_file->move(public_path('image_kamera'), $image_nama);

        $data = [
            'id_kamera'=>$request->input('id_kamera'),
            'nama_kamera'=>$request->input('nama_kamera'),
            'keterangan'=>$request->input('keterangan'),
            'harga_sewa'=>$request->input('harga_sewa'),
            'stok_kamera'=>$request->input('stok_kamera'),
            'type_kamera'=>$request->input('type_kamera'),
            'image_kamera'=>$image_nama
        ];
        Kamera::create($data);
        return redirect('/kamera');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Kamera::where('id_kamera', '=', $id)->get()->first();
        return view('kamera.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Kamera::where('id_kamera', '=', $id)->get()->first();
        return view('kamera.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        
            'nama_kamera'=>'required',
            'keterangan'=>'required',
            'harga_sewa'=>'required',
            'stok_kamera'=>'required',
            'type_kamera'=>'required',
            // 'image_kamera'=>'image|mimes:jpeg,png,jpg|max:2048',

        ]);
        
        
        $data = [
            'nama_kamera' => $request -> input('nama_kamera'),
            'keterangan' => $request -> input('keterangan'),
            'harga_sewa' => $request -> input('harga_sewa'),
            'stok_kamera' => $request -> input('stok_kamera'),
            'type_kamera' => $request -> input('type_kamera'),
        ];

        if ($request->hasFile('image_kamera')) {
            $request->validate([
                'image_kamera'=> 'image|mimes:jpeg,png,jpg|max:2048'
            ]);

            $image_file = $request->file('image_kamera');
            $image_ekstensi = $image_file->extension();
            $image_nama = date('ymdhis') .".". $image_ekstensi;
            $image_file->move(public_path('image_kamera'), $image_nama);

            $data_image = Kamera::where('id_kamera', $id)->first();
            FacadesFile::delete(public_path('image_kamera').'/'.$data_image->image_kamera);

            $data = [
                'image_kamera' => $image_nama
            ];
           
        }

        
        Kamera::where('id_kamera', $id)->update($data);
        return redirect('/kamera')->with('success','Berhasil Update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $data = Kamera::where('id_kamera', $id)->first();
      FacadesFile::delete(public_path('image_kamera').'/'.$data->image_kamera);
      Kamera::where('id_kamera', $id)->delete();
      return redirect('/kamera')->with('success', 'Berhasil hapus data');
    }
}
