@extends('layouts.mainLayout')

@section('title', 'Admin - Produk')

@section('content')
<h1>Ini halaman Produk</h1>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahproducts">
  Tambah Produk
</button>

@include('admin.modal.products_add')

{{-- menampilkan data dari table kategori --}}
<table class="table table-dark table-bordered table-hover mt-3">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $data)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->nama_produk }}</td>
            <td>{{ $data->stok }}</td>
            <td>{{$data->showkategori->nama_kategori}}</td>
            <td>Rp{{ $data->harga }}</td>
            <td class="text-center"><button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#editproducts{{$data->id}}">
                Edit
            </button>
            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusproducts{{$data->id}}">
                Hapus
            </button></td>
        </tr>

        @include('admin.modal.products_edit')
        @include('admin.modal.products_delete')
        @endforeach
    </tbody>
</table>

@endsection
