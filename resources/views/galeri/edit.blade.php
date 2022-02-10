@extends('layouts.admin')

@section('title','Form Edit Data Geleri')

@section('content')
<div class="content">
<div class="card card-info card-outline">
        <div class="col-12">
        <div class="card-header">
            <h1 class="mt-3">Form Edit Data Galeri</h1>
        </div>
            <form method="post" enctype='multipart/form-data' action="{{ route('galeri.perbarui', $galeri->id_galeri) }}">
                @method('PUT')
                @csrf
                <div class="card-header">
                <div class="card-body">


                <div class="col-6">
                    <label for="gambar" >Gambar</label>
                    <div class="file-upload" >
                        <div class="file-select">
                            <input type="file" name="gambar" id="gambar">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn-primary my-3">Update</button>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection