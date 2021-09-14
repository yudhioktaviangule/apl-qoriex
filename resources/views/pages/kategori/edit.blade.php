@extends('template.core')
@section("content")
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            <div class="card">
                <form class="card-body" method="POST" action="{{ route('kategori.update',['kategori'=>$kategori->id]) }}">
                    <auth></auth>
                    <edit></edit>
                    <div class="mb-3">
                        <label for="">Kategori</label>
                        <input type="text" class="form-control" name="name" placeholder="Input Nama Kategori" value="{{$kategori->name}}">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary btn-sm">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection