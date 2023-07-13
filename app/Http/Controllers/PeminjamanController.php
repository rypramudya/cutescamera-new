<?php

namespace App\Http\Controllers;

use App\Models\DetailPengguna;
use App\Models\Kamera;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Facade;
use Symfony\Component\Console\Input\Input;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Peminjaman::all();
        return view('peminjaman.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $idPeminjaman = Peminjaman::orderBy('id_pinjam', 'DESC')->first();
        $newId = $idPeminjaman ? (int) substr($idPeminjaman->id_pinjam, 1) + 1 : 1;
        $newIdFormatted = 'P' . str_pad($newId, 3, '0', STR_PAD_LEFT);
        $us = User::all();
        $cus = User::where('role', 2)->get();
        $kam = Kamera::all();
        
        if(Auth::check() && Auth::user()->role == 1){

            return view('peminjaman.create', compact('kam','cus','us','newIdFormatted'));
        }
        else {
            return view('peminjaman.usercreate', compact('kam','cus','us','newIdFormatted'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_pinjam' => 'required',
            'user_id' => 'required',
            'kamera_id' => 'required',
            'mulai_sewa' => 'required',
            'selesai_sewa' => 'required',
            'total_harga' => 'required',
            'bukti_bayar' => 'image|mimes:jpeg,png,jpg|max:2048',
            'status',
        ]);

        $image_file = $request->file('bukti_bayar');
        $image_ekstensi = $image_file->extension();
        $image_nama = date('ymdhis') . "." . $image_ekstensi;
        $image_file->move(public_path('bukti_bayar'), $image_nama);

        $data = [
            'id_pinjam' => $request->input('id_pinjam'),
            'user_id' => $request->input('user_id'),
            'kamera_id' => $request->input('kamera_id'),
            'mulai_sewa' => $request->input('mulai_sewa'),
            'selesai_sewa' => $request->input('selesai_sewa'),
            'total_harga' => $request->input('total_harga'),
            'bukti_bayar' => $image_nama,
            'status' => 'Pending',
        ];
        Peminjaman::create($data);
        return redirect('/peminjaman');
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
        $data = Peminjaman::where('id_pinjam', '=', $id)->get()->first();
        return view('peminjaman.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_pinjam'=>'required',
            'user_id'=>'required',
            'kamera_id'=>'required',
            'mulai_sewa'=>'required',
            'selesai_sewa'=>'required',
            'total_harga'=>'required',
            'bukti_bayar'=>'image|mimes:jpeg,png,jpg|max:2048',
            'status'=>'required'

        ]);
        
        
        $data = [
            'id_pinjam'=>$request->input('id_pinjam'),
            'detail_user_id'=>$request->input('user_id'),
            'kamera_id'=>$request->input('kamera_id'),
            'mulai_sewa'=>$request->input('mulai_sewa'),
            'selesai_sewa'=>$request->input('selesai_sewa'),
            'total_harga'=>$request->input('total_harga'),
            'status'=> $request->input('total_harga'),
        ];

        if ($request->hasFile('bukti_bayar')) {
            $request->validate([
                'bukti_bayar'=> 'image|mimes:jpeg,png,jpg|max:2048'
            ]);

            $image_file = $request->file('bukti_bayar');
            $image_ekstensi = $image_file->extension();
            $image_nama = date('ymdhis') .".". $image_ekstensi;
            $image_file->move(public_path('bukti_bayar'), $image_nama);

            $data_image = Kamera::where('id_pinjam', $id)->first();
            Facade::delete(public_path('bukti_bayar').'/'.$data_image->bukti_bayar);

            $data = [
                'bukti_bayar' => $image_nama
            ];
           

        }

        
        Peminjaman::where('id_pinjam', $id)->update($data);
        // return redirect('/peminjaman')->with('success','Berhasil Update data');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}