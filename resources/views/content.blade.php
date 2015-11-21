@extends('master') 		<!--memanggil dan menampilkan view master -->

@section('konten')
Jenis konten: {{ $data['tipe'] }}, jumlah: {{ $data['jumlah'] }}
@stop