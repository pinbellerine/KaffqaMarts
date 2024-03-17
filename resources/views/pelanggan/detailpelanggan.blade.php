@extends('layouts.admin')
@section('judul')

@section('content')
<div class="p-3">
    <div class="card" style="width: 24rem">
        <div class="card-body">
            <h5 class="card-title">Detail Data Profil Pelanggan ke {{$profil -> id}}</h5>
            <h4>{{$profil->nama_lengkap}}</h4>
            <h4>{{$profil->no_hp}}</h4>
            <h5>{{$profil->alamat}}</h5>
       </div>
    </div>
    <a href="/pelanggan" class="btn btn-primary my-3">Kembali</a>
</div>
@endsection

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
