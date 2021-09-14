<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function list(Request $request)
    {

        if($request->nomor!=NULL):
            $data = Transaksi::where('nomor',$request->nomor)->get();
        else:
            $data = Transaksi::get();
        
        endif;
        $title="Kelola Data Transaksi";
        return view('pages.transaksi.view',compact('data','title'));
    }
    public function approve($id)
    {
        $transaksi = Transaksi::find($id);
        if($transaksi!=NULL):
            $approved = "y";
            $transaksi->status_transaksi = $approved;
            $transaksi->save();
        endif;
        return redirect()->back();
    }
}
