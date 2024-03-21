@extends('avisha')
@section('atas')
    <button type="button" class="btn btn-warning"><a style="color: #ffff" href="/pegawai"> Kembali</a></button>
@endsection

	<br/>
	<br/>

@section('bawah')
        @foreach($pegawai as $p)
        <form class="form-inline" action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            Nama <input class="mr-1" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}">
            Jabatan <input class="mr-1" type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            Umur <input class="mr-1" type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}">
            Alamat <textarea class="mr-1" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
            <br>
            <input type="submit" value="Simpan Data">
        </form>
        @endforeach
@endsection
