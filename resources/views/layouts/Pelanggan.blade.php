@extends('main')

@section('title', 'Pelanggan')

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
				<th>nama_pelanggan</th>
				<th>alamat</th>
				<th>phone</th>
				<th>email</th>
			</tr>
		</thead>
		<tbody>

			@php $i=1 @endphp
			@foreach($pelanggans as $P)
			<tr>
				<td>{{$P->nama_pelanggan}}</td>
				<td>{{$P->alamat}}</td>
				<td>{{$P->phone}}</td>
				<td>{{$P->email}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection
