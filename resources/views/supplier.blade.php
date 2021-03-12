@extends('main')

@section('title','Supplier')

@section('content')
<style type="text/css">
    table {
        border-collapse: collapse;
        width: 100%;
        font-size: 9pt;
        border: 1px solid #999;
        color: #232323;
    }
    th, td {
        text-align: left;
        padding: 16px;
        font-size: 9pt;
        border: 1px solid #999;
        color: #232323;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2
    }
</style>
<table class="table table-bordered">
    <thead >
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis</th>
        <th scope="col">Kontrak (tahun)</th>
        <th scope="col">Biaya Kontrak (tahun)</th>
        {{-- <th scope="col">Gaji</th> --}}
      </tr>
    </thead>
    <tbody>
        <?php
            $i = 1;
            ?>
        @foreach ($suppliers as $supplier)
            <tr>
                <th scope="row"><?php print($i); ?></th>
                <td>{{$supplier->nama}}</td>
                <td>{{$supplier->jenis}}</td>
                <td>{{$supplier->kontrak_tahun}}</td>
                <td>{{$supplier->biayaKontrak_tahun}}</td>
                {{-- <td>{{$pegawai->gaji}}</td> --}}
            </tr>

            <?php $i++; ?>
        @endforeach
    </tbody>
</table>
<div class="d-flex">
    {{$suppliers->links()}}
</div>
@endsection
