@extends('template.core')
@section("content")
    <div class="card">
        <div class="card-body">
            <a href="{{route('kategori.create')}}" class="btn btn-sm btn-primary">ADD</a>
            <p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategori as $key => $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td class='text-right row'>
                                    <a href="{{route('kategori.show',['kategori'=>$value->id])}}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('kategori.edit',['kategori'=>$value->id])}}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                    <form method="POST" action="{{route('kategori.destroy',['kategori'=>$value->id])}}">
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