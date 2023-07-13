<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RekapController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }

    public function bulanan(Request $request)
    {
        $bulan = $request->bulan;
        $ubahformat = Carbon::parse($bulan)->format('m');
        $nama_bulan = Carbon::parse($bulan)->locale('id')->translatedFormat('F');
        // dd($nama_bulan);
        $data = Peminjaman::join('tabel_kamera', 'tabel_kamera.id_kamera', '=', 'tabel_peminjaman.kamera_id')
            ->join('users', 'users.id', '=', 'tabel_peminjaman.detail_user_id')
            ->select('tabel_peminjaman.*', 'tabel_kamera.nama_kamera', 'users.nama', \DB::raw('DATEDIFF(tabel_peminjaman.selesai_sewa, tabel_peminjaman.mulai_sewa) AS jumlah_hari'))
            ->whereMonth('tabel_peminjaman.mulai_sewa', $ubahformat)
            ->get();
        if (!$data->isEmpty()) {
            $pdf = Pdf::loadView('laporan.pdf_bulanan', ['data' => $data, 'nama_bulan' => $nama_bulan]);
            $nama_file = 'laporan-bulanan' . $ubahformat . '.pdf';
            return $pdf->download($nama_file);
        } else {
            return back()->with('error', 'Data tidak ada pada bulan dan tahun yang dipilih');
        }
    }

    public function tahunan(Request $request)
    {
        $tahun = $request->tahun;
        // dd($tahun);
        $data = Peminjaman::join('tabel_kamera', 'tabel_kamera.id_kamera', '=', 'tabel_peminjaman.kamera_id')
            ->join('users', 'users.id', '=', 'tabel_peminjaman.detail_user_id')
            ->select('tabel_peminjaman.*', 'tabel_kamera.nama_kamera', 'users.nama', \DB::raw('DATEDIFF(tabel_peminjaman.selesai_sewa, tabel_peminjaman.mulai_sewa) AS jumlah_hari'))
            ->whereYear('tabel_peminjaman.mulai_sewa', $tahun)
            ->get();
        if (!$data->isEmpty()) {
            $pdf = Pdf::loadView('laporan.pdf_tahunan', ['data' => $data, 'tahun' => $tahun]);
            $nama_file = 'laporan-tahunan' . $tahun . '.pdf';
            return $pdf->download($nama_file);
        } else {
            return back()->with('error', 'Data tidak ada pada tahun yang dipilih');
        }
    }
}