<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::get();
        $title = "Kelola data Kategori";
        return view("pages.kategori.index",compact('title','kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah data Kategori";
        return view("pages.kategori.add",compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->only("name");
        $models = new Kategori();
        $models->name= $post['name'];
        $models->save();
        return redirect(route('kategori.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::find($id);
        $title    = "Nama Kategori : $kategori->name";
        return view("pages.kategori.view",compact('title','kategori'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::find($id);
        $title    = "Ubah data Kategori";
        return view("pages.kategori.edit",compact('title','kategori'));
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
        
        $kategori = Kategori::find($id);
        if($kategori!==NULL):
            $kategori->name= $request->name;
            $kategori->save();
            echo "<script>
                alert('ERROR : Kategori berhasil dirubah');
                window.location.href='".route('kategori.index')."';
            </script>";
        else:
            echo "<script>
                alert('ERROR : Kategori tidak ditemukan');
                window.location.href='".route('kategori.index')."';
            </script>";
        endif;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kategori::find($id);
        $data->delete();
        echo "
            <script>
                alert('Data dihapus');
                window.location.href='".route('kategori.index')."';
            </script>
        ";
    }
}
