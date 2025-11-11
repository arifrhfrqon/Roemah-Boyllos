@extends('admin.layout')
@section('title', 'Administrasi')

@section('content')
<h2 class="mb-4">Data Administrasi</h2>
<table class="table table-bordered table-hover align-middle">
    <thead class="table-success text-center">
        <tr>
            <th>No</th>
            <th>Nama Suplier</th>
            <th>Alamat</th>
            <th>Nomor Kontak</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>CV Agro Sejahtera</td>
            <td>Bandung</td>
            <td>0812-3456-7890</td>
            <td class="text-center">
                <button class="btn btn-warning btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>UD Tani Makmur</td>
            <td>Surabaya</td>
            <td>0813-2222-5555</td>
            <td class="text-center">
                <button class="btn btn-warning btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
            </td>
        </tr>
    </tbody>
</table>
@endsection
