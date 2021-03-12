@extends('main')

@section('title','Pegawai')

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
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Posisi</th>
        <th scope="col">Gaji</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $i = 1;
            ?>
        @foreach ($pegawais as $pegawai)
            <tr>
                <th scope="row"><?php print($i); ?></th>
                <td>{{$pegawai->nama}}</td>
                <td>{{$pegawai->alamat}}</td>
                <td>{{$pegawai->tanggal_lahir}}</td>
                <td>{{$pegawai->posisi}}</td>
                <td>{{$pegawai->gaji}}</td>
            </tr>

            <?php $i++; ?>
        @endforeach
    </tbody>
</table>
<div class="d-flex">
    {{$pegawais->links()}}
</div>
@endsection
