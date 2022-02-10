@extends('layouts/admin')

@section('title','Galeri')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-10">
            <h3 class="mt-3">Detail data galeri Nomor Id {{ $id_galeri}}</h3>   
            
            <div>
            {{ $data['gambar'] }}
            </div>
            <a  href="/admin/galeri" class="btn btn-success my-3"  >
                        List Galeri
            </a>
        </div>
    </div>
</div>
@endsection 