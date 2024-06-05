<?php
namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

class MahasiswaController extends Controller
{
    //READ DATA
    public function adminIndex(Request $request)
    {
        $allData = mahasiswa::all();
        return view('index', ['data' => $allData]);
    }

    public function adminAdd()
    {
        return view('add');
    }

    public function adminEdit()
    {
        return view('edit');
    }

    // CREATE DATA
    public function AddAdmin(Request $request)
    {
        $newData = new mahasiswa();
        $newData->id = $request->id;
        $newData->nama = $request->nama;
        $newData->judul_pesan = $request->judul_pesan;
        $newData->isi_pesan = $request->isi_pesan;
        $newData->email = $request->email;

        $newData->save();

        $subjek = "Pesan Email Dari " . $newData->nama;

        Mail::to('danielkurnip02@gmail.com')->send(new SendEmail($newData, $subjek));
        return redirect('/adminIndex');
    }

    // DELETE DATA
    public function DeleteAdmin($id)
    {
        $dataDelete = mahasiswa::find($id);
        $dataDelete->delete();
        return redirect('/adminIndex');
    }

    // public function sending_email(Request $request)
    // {
    //     Mail::to('danielkurnip02@gmail.com')->send(new SendEmail($request));
    //     return redirect('adminAdd');
    // }
}