@extends('template.core')
@section("content")
    <div class="card">
        <div class="card-body">
            <a href="{{route('product.create')}}" class="btn btn-sm btn-primary">ADD</a>
            <p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tipe</th>
                            <th>Merk</th>
                            <th colspan="6">Desksripsi</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategori as $key => $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->getKategori()->name}}</td>
                                <td>{{ $value->kamera_depan }}/{{ $value->kamera_belakang }}</td>
                                <td>{{ $value->layar }}</td>
                                <td>{{ $value->cpu }}</td>
                                <td>{{ $value->gpu }}</td>
                                <td>{{ $value->battery }}</td>
                                <td>{{ $value->simcard }}</td>
                                <td>{{ $value->stok }}</td>
                                <td>{{ $value->harga }}</td>
                                <td class='text-right row'>
                                    <a href="{{route('product.show',['product'=>$value->id])}}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('product.edit',['product'=>$value->id])}}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                    <form method="POST" action="{{route('product.destroy',['product'=>$value->id])}}">
                                        <hapus></hapus>
                                        <auth></auth>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </p>
        </div>
    </div>
@endsection