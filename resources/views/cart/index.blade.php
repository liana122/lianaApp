@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h1 class="m-0">Riwayat Pemesanan</h1> -->
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="{{route('cart.lanjutkanPemesanan')}}">
                <div class="card">
                    <div class="card-header">
                    <div class="row">
                    <div class="col-9">
                        <h3 class="card-title">Keranjang Belanja <b> {{auth()->user()->name}}</b></h3></div>
                        <div class="col-3">
                        <button type="submit" class="btn btn-success btn-sm">
                            <i class="fas fa-shopping-bag"></i>
                            Lanjutkan Pemesanan
                        </button>
                    </div>
                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Gambar</th>
                                    <th>Produk</th>
                                    <th>Jumlah Pesanan</th>
                                    <th>Harga</th>
                                    <th>Total Harga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $key=>$row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img class="img-thumbnail" src="{{ asset('/gambar/'.$row->author.'/'.$row->gambar)}}" width="150"></td>
                                    <td>{{ $row->keterangan }}</td>
                                    <td>{{ $row->jumlahPesanan }}</td>
                                    <td>{{ $row->hargaSatuan }}</td>
                                    <td>{{ $row->totalHarga }}</td>
                                    <td>
                                        <input type='checkbox' name="cart_ids[]" value="{{ $row->id }} ">
                                    
                                    <a href="/user/cart/delete/{{ $row->id }}" onclick="return confirm('Yakin Ingin Menghapus Data?')" class="btn btn-sm btn-danger delete"><i class="fas fa-trash"></i></a>   
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                </form>
            </div>
            <!-- ./col -->
        </div>

    </div><!-- /.container-fluid -->

    
</section>

@endsection