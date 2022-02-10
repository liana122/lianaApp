@extends('layouts.admin')

@section('content')
<!-- @include('sweetalert::alert') -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                {{-- <h1 class="m-0"></h1> --}}
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
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Isi Detail Pemesanan</h3>
                    </div>
                    <div class="card">
                    <div class="card-header">
                    Detail Keranjang Pemesanan
                    </div>
                    <div class="card-body">
                    <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Produk</th>
                                    <th>Jumlah Pesanan</th>
                                    <th>Harga</th>
                                    <th>Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $key=>$row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->keterangan }}</td>
                                    <td>{{ $row->jumlahPesanan }}</td>
                                    <td>{{ $row->hargaSatuan }}</td>
                                    <td>{{ $row->totalHarga }}</td>
                                    <td>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>

                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/{{ auth()->user()->role }}/pemesanan/cart/{{ $userid }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <ul>
                                <li>No. Rek BRI : 008876372456754672</li>
                                <li>Harga Total Rp. : {{number_format($hargaTotal,2)}}</li>
                            </ul>
                            
                            <!-- <div class="form-group">
                                <label for="jumlahpesanan">Jumlah Pesanan</label>
                                <input type="number" class="form-control" id="jumlahpesanan" name="jumlahpesanan"
                                    placeholder="Jumlah Pesanan">
                            </div> -->
                            <div class="form-group">
                                <label for="namapemesan">Nama Pemesan</label>
                                <input type="text" class="form-control" id="namapemesan" name="namapemesan"
                                    placeholder="Masukkan nama">
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleInputPassword1">Catatan</label>
                                <textarea class="form-control" name="keterangan" rows="3" placeholder="Enter ..."></textarea>
                            </div> -->
                            <div class="form-group">
                                <label for="exampleInputPassword1">Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan alamat"></textarea>
                            </div>
                            <div>
                                <label for="tglfoto" >Tanggal Foto</label></br>
                                <label for="tglfoto" value="{{ __('Tanggal Lahir') }}" >
                                <input type="date"  class="block mt-1 w-full datepicker" type="text" name="tglfoto" 
                                :value="old('tglfoto')" required autofocus autocomplete="tglfoto" />
                                    @error('tglfotoss')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                            </div>
                            <div class="col-6">
                                <label for="jam" >Jam Pengambilan Foto</label>
                                <input type="time" class="form-control @error('jam') is-invalid @enderror" id="jam" 
                                placeholder="Masukkan jam" name="jam" value="{{old('jam')}}">
                                @error('jam')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="no_telp">No. Telepon</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp"
                                    placeholder="Masukkan no. telepon">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Bukti Transaksi</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="buktipembayaran" id="customFile">
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