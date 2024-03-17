@extends('layouts.admin')
@section('judul','Tambah Profil Pelanggan')

@section('content')
<form action="/pelanggan" method="POST">
    @csrf
    <div class="form-group p-3">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="form-Control" placeholder="Masukan Nama Lengkap">
        @error('nama')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>No Handphone</label>
        <input type="number" name="nohp" class="form-Control" placeholder="Masukan No Handphone">
        @error('nohp')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-Control" placeholder="Masukan Alamat">
        @error('alamat')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <div class="p-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
