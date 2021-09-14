@php 
    
    $expl = explode(" GB",$data->ram);
    $expl3 = explode(" GB",$data->memori);
    $xram = $expl[0];
    $xmem = $expl3[0];
@endphp
@extends('template.core')
@section("content")
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            <div class="card">
                <form class="card-body" method="POST" action="{{ route('product.update',['product'=>$data->id]) }}" enctype="multipart/form-data" >
                    <auth></auth>
                    <edit></edit>
                    <div class="mb-3">
                        <label for="">Merk</label>
                        <select name="kategori_id" id="" required class='form-control'>
                            @foreach($kategori as $key => $value)
                                <option value="{{$value->id}}" {{($value->id === $data->kategori_id ? "selected":"")}}>{{$value->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">RAM</label>
                        <input placeholder="RAM Handphone" type="number"  class="form-control" name="ram" required value="{{$xram}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Storage</label>
                        <input placeholder="Storage Handphone" type="number" class="form-control" name="memori" required value="{{$xmem}}">
                    </div>
                    <div class="mb-3">
                        <label for="">TIPE</label>
                        <input required type="text" class="form-control" name="name" placeholder="Input TIPE HANDPHONE" value={{$data->name}}>
                    </div>
                    <div class="mb-3">
                        <label required for="">Harga</label>
                        <input type="number" class="form-control" name="harga" placeholder="Input Harga" value="{{$data->harga}}">
                    </div>
                    <div class="mb-3">
                        <label required for="">Stok</label>
                        <input type="number" class="form-control" name="stok" placeholder="Input Stok" value="{{$data->stok}}">
                    </div>

                    
                  
                    <div class="mb-3">
                        <button class="btn btn-primary btn-sm">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

