@extends('avisha')
@section('atas')
    <button type="button" class="btn btn-warning"><a style="color: #ffff" href="/pegawai"> Kembali</a></button>
@endsection

	<br/>
	<br/>

@section('bawah')
	<form class="form-inline" action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input class="mr-1" type="text" name="nama" required="required">
		Jabatan <input class="mr-1" type="text" name="jabatan" required="required">
		Umur <input class="mr-1" type="number" name="umur" required="required">
		Alamat <textarea class="mr-1" name="alamat" required="required"></textarea> <br/>
        <br>
        <br>
		<input type="submit" value="Simpan Data">
	</form>
@endsection

</body>
</html>
