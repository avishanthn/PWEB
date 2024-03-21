@extends('avisha')

@section('atas')
    <button type="button" class="btn btn-warning"><a style="color: #ffff" href="/pegawai/tambah"> + Tambah Pegawai Baru</a></button>
@endsection
	<br/>
	<br/>

@section('bawah')
	<table class="table table-striped text-center" border="1">
		<tr style="background-color:cornflowerblue">
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>

        <!--foreach untuk baca array-->

		@foreach($pegawai as $p)
		<tr style="background-color: #ffff">
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <button type="button" class="btn btn-primary"><a style="color: #ffff" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</button>
                |
                <button type="button" class="btn btn-danger"><a style="color: #ffff" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</button>
			</td>
		</tr>
		@endforeach
	</table>
@endsection

