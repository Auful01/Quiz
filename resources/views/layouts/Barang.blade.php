@extends('main')

@section('title', 'Barang')

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
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>nama_barang</th>
				<th>qty</th>
				<th>harga_satuan</th>
				<th>total</th>
			</tr>
		</thead>
		<tbody>

			@php $i=1 @endphp
			@foreach($barangs as $B)
			<tr>
				<td>{{$B->nama_barang}}</td>
				<td>{{$B->qty}}</td>
				<td>{{$B->harga_satuan}}</td>
				<td>{{$B->total}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection
