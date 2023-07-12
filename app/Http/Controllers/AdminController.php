<?php

namespace App\Http\Controllers;

use App\Models\DetailPengguna;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

     //fungsi tampil customer
    public function tampilCustomer(){
        $data = User::join('detail_penggunas', 'users.id','=','detail_penggunas.user_id')->select('users.nama', 'users.email', 'users.id', 'detail_penggunas.user_id', 'detail_penggunas.nik','detail_penggunas.nohp','detail_penggunas.alamat','detail_penggunas.fotoid','detail_penggunas.fotobersamaid','detail_penggunas.jenisid')->get();
        return view('customer.data-customer', compact('data'));
    }

    //fungsi hapus customer
    public function hapusCustomer($id){
        $data = User::find($id);
        $detail = DetailPengguna::where('user_id', '=' , $data->id)->get()->first();
        // dd($detail);
        $detail->delete();
        $data->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }

    //fungsi tambah admin
    public function tambahAdmin(Request $request){
        $validated = Validator::make($request->all(),[
            'nama' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ],
        [
            'nama.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password tidak boleh kosong',
        ]
    );
        if($validated->fails()){
            return redirect()->back()->with('error', $validated->messages()->first());
        }
        $data = new User();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->role = 1;
        $data->password = Hash::make($request->password);
        $data->save();
        return redirect()->route('tampil-admin')->with('success', 'Data Berhasil Ditambahkan');
    }

    //fungsi tampil admin
    public function tampilAdmin(){
        $data = User::where('role', '=', 1)->get();
        return view('admin.data-admin', compact('data'));
    }

    //fungsi edit admin
    public function editAdmin($id){
        $data = User::where('id', '=', $id)->get()->first();
        return view('admin.edit-admin', compact('data'));
    }

    //fungsi update admin
    public function updateAdmin(Request $request, $id){
        $data = User::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        if($request->password != null){
            $data->password = Hash::make($request->password);
        }
        $data->save();
        return redirect()->route('tampil-admin')->with('success', 'Data Berhasil Diupdate');
    }

    //fungsi hapus admin
    public function hapusAdmin($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }

    //fungsi edit profile
    public function editProfile(){
        $data = User::where('id', '=', Auth::user()->id)->get()->first();
        return view('profile.edit-profile', compact('data'));
    }

    //fungsi update profile
    public function updateProfile(Request $request, $id){
        $data = User::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->save();
        return redirect()->back()->with('success', 'Data Berhasil Diupdate');
    }

    //fungsi edit password
    public function editPassword(){
        $data = User::where('id', '=', Auth::user()->id)->get()->first();
        return view('profile.edit-password', compact('data'));
    }

    //fungsi update password dengan validate password lama
    public function updaterPassword(Request $request){
        $data = User::find(Auth::user()->id);

        if(Hash::check($request->password_lama, $data->password)){
            if($request->passwordbaru != $request->konfirmasipassword){
                return redirect()->back()->with('error', 'Konfirmasi Password Tidak Sesuai');
            }else{
                $data->password = Hash::make($request->passwordbaru);
                $data->save();
                return redirect()->back()->with('success', 'Password Berhasil Diupdate');
            }
        }else{
            return redirect()->back()->with('error', 'Password Lama Salah');
        }
    }

}
