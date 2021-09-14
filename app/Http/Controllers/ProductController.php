<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Produk::get();
        $title = "Kelola data Produk";
        return view("pages.products.index",compact('title','kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah data product";
        $kategori = Kategori::get();
        return view("pages.products.add",compact('title','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->input();
        $post = json_decode(json_encode($post));
        $file = $request->file("file");
        $data  = new Produk();
        $data->name = $post->name;
        $data->harga = $post->harga;
        $data->inisial = $post->inisial;
        $data->kategori_id = $post->kategori_id;
        $data->ram = $post->ram." GB";
        $data->memori = $post->memori." GB";
        $data->save();
        $id = $data->id;
        $fileName = $id.".".$file->getClientOriginalExtension();
        $https = $fileName;
        $data = Produk::find($id);
        $data->gambar = $https;
        $data->save();
        $file->move(base_path()."/../img",$fileName);
        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Produk::find($id);
        $title = "LIHAT DATA PRODUCT";
        $url   = env("IMAGE_URL","http://localhost:3000");
        return view('pages.products.view',compact('title','data','url'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Produk::find($id);
        $kategori = Kategori::all();
        $title = "EDIT DATA PRODUCT";
        
        return view('pages.products.edit',compact('title','data','kategori'));
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
        $post = $request->input();
        $post = json_decode(json_encode($post));
        $data = Produk::find($id);
        $data->name = $post->name;
        $data->harga = $post->harga;
        $data->kategori_id = $post->kategori_id;
        $data->ram = $post->ram." GB";
        $data->memori = $post->memori." GB";
        $data->save();
        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Produk::find($id);
        if($data!=NULL):
            unlink(base_path()."/../img/".$data->gambar);
            $data->delete();
        endif;
        return redirect(route('product.index'));
    }
}
