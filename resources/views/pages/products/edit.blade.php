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
                        <label required for="">Kamera Depan</label>
                        <input required type="text" class="form-control" name="kamera_depan" placeholder="Kamera Depan" value="{{$data->kamera_depan}}">
                    </div>
                    <div class="mb-3">
                        <label required for="">Kamera Belakang</label>
                        <input required type="text" class="form-control" name="kamera_belakang" placeholder="Kamera Belakang" value="{{$data->kamera_belakang}}">
                    </div>
                    <div class="mb-3">
                        <label required for="">Layar</label>
                        <input required type="text" class="form-control" name="layar" placeholder="Layar" value="{{$data->layar}}">
                    </div>
                    <div class="mb-3">
                        <label required for="">CPU</label>
                        <input required type="text" class="form-control" name="cpu" placeholder="CPU" value="{{$value->cpu}}">
                    </div>
                    <div class="mb-3">
                        <label required for="">GPU</label>
                        <input required type="text" class="form-control" name="gpu" placeholder="GPU" value="{{$value->gpu}}">
                    </div>
                    <div class="mb-3">
                        <label required for="">Battery</label>
                        <input required type="text" class="form-control" name="battery" placeholder="Battery" value="{{$value->battery}}">
                    </div>
                    <div class="mb-3">
                        <label required for="">Simcard dan Jaringan</label>
                        <input required type="text" class="form-control" name="simcard" placeholder="Simcard" value="{{$value->simcard}}">
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

