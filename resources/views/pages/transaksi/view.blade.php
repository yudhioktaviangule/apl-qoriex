@extends('template.core')
@section("content")
    <div class="card">
        <div class="card-body">
            <div class="row">
                
                <div class="col-md-6">
                    <form action="">
                        <div class="input-group mb-3">
                            <input type="text" name="nomor" class="form-control" placeholder="Masukkan Nomor Transaksi" aria-label="" aria-describedby="basic-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary btn-sm">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Type Handphone</th>
                            <th>Pelanggan</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Harga</th>
                            <th>Jumlah Beli</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $value)
                            <tr>
                                <td>{{ $value->nomor }}</td>
                                <td>{{ $value->getProduct()->name}}</td>
                                <td>{{ $value->getPelanggan()->name}}</td>
                                <td>{{ $value->getPelanggan()->telepon}}</td>
                                <td>{{ $value->getPelanggan()->alamat}}</td>
                                <td>{{ $value->harga_transaksi }}</td>
                                <td>{{ $value->qty }}</td>
                                <td class='text-right row'>
                                   @if($value->status_transaksi==='n' && $value->getPelanggan()->name!=="guest")
                                        <a href="{{route('transaksi.approve',['id'=>$value->id])}}" class="btn btn-primary btn-sm">Approve</a>
                                   @else
                                        Approve Tidak Tersedia
                                   @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </p>
        </div>
    </div>
@endsection