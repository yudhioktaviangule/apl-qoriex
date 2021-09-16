@extends('template.core')
@section("content")
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{route('product.index')}}" class="btn btn-primary">Kembali</a>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-6 col-12">
                            <p>
                                <label for="">Merk</label>
                                <div class="form-control">{{$data->getKategori()->name}}</div>
            
                            </p>
                            <p>
                                <label for="">Tipe</label>
                                <div class="form-control">{{$data->name}}</div>
            
                            </p>
                            <p>
                                <label for="">Inisial</label>
                                <div class="form-control">{{$data->inisial}}</div>
                            </p>
                            <p>
                                <label for="">Harga</label>
                                <div class="form-control">{{number_format($data->harga)}}</div>
                            </p>
                            <p>
                                <label for="">RAM</label>
                                <div class="form-control">{{$data->ram}}</div>
                            </p>
                            <p>
                                <label for="">Storage</label>
                                <div class="form-control">{{$data->memori}}</div>
                            </p>
                            <p>
                                <label for="">Kamera</label>
                                <div class="form-control">{{$data->kamera_depan}}/{{$data->kamera_belakang}}</div>
                            </p>
                            <p>
                                <label for="">Layar</label>
                                <div class="form-control">{{$data->layar}}</div>
                            </p>
                            <p>
                                <label for="">CPU / GPU</label>
                                <div class="form-control">CPU : {{$data->cpu}} / GPU :{{ $data->gpu }}</div>
                            </p>
                            <p>
                                <label for="">Battery</label>
                                <div class="form-control">{{$data->battery}}</div>
                            </p>
    
                        </div>
                        <div class="col-md-6 col-12">
                                <p>Foto</p>
                                <img src="{{$url.'/'.$data->gambar}}" style="width:100%">
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
    <script>
          
    </script>
@endsection