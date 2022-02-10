@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                {{-- <h1 class="m-0"></h1> --}}
            </div><!-- /.col -->
            
            
        </div><!-- /.row -->
        <center><img class="img-thumbnail center" src="{{ asset('/gambar/'.$data->author.'/'.$data->gambar)}}" width="600"></center>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Pembayaran Kelola Produk {{ $data->nama }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/{{ auth()->user()->role }}/pembayaran/{{ $data->id }}/simpan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <ul>
                                <li>Nama &nbsp; : {{ $data->nama }}</li>
                                <li>Harga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{ $data->harga }}</li>
                                <li>Keterangan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{ $data->keterangan }}</li>
                                <li>Stok &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{ $data->stok }}</li>
                            </ul>
                            
                            
                            <div class="form-group">
                                <label for="namapemesan">Nama Pemesan</label>
                                <input type="text" class="form-control" id="namapemesan" name="namapemesan"
                                    placeholder="Nama Pemesan">
                            </div>
                            <div class="form-group">
                                <label for="jumlahpesanan">Jumlah Pesanan</label>
                                <input type="number" class="form-control" id="jumlahpesanan" name="jumlahpesanan"
                                    placeholder="Jumlah Pesanan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Keterangan</label>
                                <textarea class="form-control" name="keterangan" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Bukti Transfer</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="buktitransfer" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>



@endsection

@section('script')
<script src="{{ asset('template/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
    $(function () {
    bsCustomFileInput.init();
    });
</script>
@endsection