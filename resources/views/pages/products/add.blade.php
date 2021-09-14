@extends('template.core')
@section("content")
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            <div class="card">
                <form class="card-body" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" >
                    <auth></auth>
                    <div class="mb-3">
                        <label for="">Merk</label>
                        <select name="kategori_id" id="" required class='form-control'>
                            <option value="">Pilih Merk</option>
                            @foreach($kategori as $key => $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">RAM</label>
                        <input placeholder="RAM Handphone" type="number"  class="form-control" name="ram" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Storage</label>
                        <input placeholder="Storage Handphone" type="number" class="form-control" name="memori" required>
                    </div>
                    <div class="mb-3">
                        <label for="">TIPE</label>
                        <input required type="text" class="form-control" name="name" placeholder="Input TIPE HANDPHONE">
                    </div>
                    <div class="mb-3">
                        <label required for="">Inisial</label>
                        <input required type="text" class="form-control" name="inisial" placeholder="Input Inisial">
                    </div>
                    <div class="mb-3">
                        <label required for="">Harga</label>
                        <input required type="number" class="form-control" name="harga" placeholder="Input Harga">
                    </div>
                    <div class="mb-3">
                        <label required for="">Stok</label>
                        <input required type="number" class="form-control" name="stok" placeholder="Input Harga">
                    </div>
                    <div class="mb-3">
                        <label required for="">Foto</label>
                        <input  type="file" class="form-control" name="file" placeholder="Input Stok ">
                    </div>
                    
                  
                    <div class="mb-3">
                        <button class="btn btn-primary btn-sm">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

