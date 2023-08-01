@extends('layout1.main2')
@section('content')


<h4><b>Tambah Anggota</b></h4>
<br>
<form action="{{ asset('anggota/tambah_proses') }}" method="POST">
@csrf

<div class="mb-3 row">
    <label for="nama_anggota" class="col-sm-2 col-form-label">Nama Anggota</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_anggotag" name="nama_anggota">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="alamat" name="alamat">
    </div>
</div>
<div class="mb-3 row">
    <label for="no_hp" class="col-sm-2 col-form-label">no_hp</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="no_hp" name="No_hp">
    </div>
</div>
<input type="submit" value="Simpan">
</form> 

@endsection