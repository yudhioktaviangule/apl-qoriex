@extends('template.core')
@section("content")
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            <div class="card">
                <form class="card-body" method="POST" action="{{ route('kategori.store') }}">
                    <auth></auth>
                    <div class="mb-3">
                        <label for="">Kategori</label>
                        <div class="form-control">{{$kategori->name}}</div>
                    </div>
                    <div class="mb-3">
                        <a href="{{route('kategori.index')}}" class="btn btn-primary btn-sm">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection