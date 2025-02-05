@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-6">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-6">
                <ul class="list-inline mb-0 float-end">
                    <li class="list-inline-item">
                        <a href="{{route('barangs.exportExcel')}}" class="btn btn-outline-success">
                            <i class="bi bi-download me-1"></i> to Excel
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{route('barangs.exportPdf')}}" class="btn btn-outline-danger">
                            <i class="bi bi-download me-1"></i> to PDF
                        </a>
                    </li>
                    <li class="list-inline-item">|</li>
                    <li class="list-inline-item">
                        <a href="{{ route('barangs.create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-1"></i> Create Shoes
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('sales.create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-1"></i> Penjualan
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="shoesTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NO</th>
                        <th width="1%">Gambar</th>
                        <th>Merk</th>
                        <th>Ukuran</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th>Supplier</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <br>
@endsection
