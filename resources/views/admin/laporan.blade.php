@extends('admin.layout')
@section('title', 'Laporan Suplier')

@section('content')
<h2 class="mb-4">Laporan Suplier MBG</h2>
<table class="table table-bordered table-striped align-middle">
    <thead class="table-success text-center">
        <tr>
            <th>No</th>
            <th>Nama Suplier</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Tanggal Kirim</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>CV Agro Sejahtera</td>
            <td>Pupuk Organik</td>
            <td>250 karung</td>
            <td>02 November 2025</td>
        </tr>
        <tr>
            <td>2</td>
            <td>UD Tani Makmur</td>
            <td>Benih Jagung</td>
            <td>400 pack</td>
            <td>03 November 2025</td>
        </tr>
    </tbody>
</table>
@endsection
