@extends('layout.main')
@section('judul','Jurusan')
@section('container')

<div class="container">
    <div class=" col-12 mb-4">
        <a href="{{url('jurusan')}}" class="btn btn-dark rounded">Back</a>
    </div>
    <div class="card shadow-lg">
        <div class="card-body">
            <form action="{{route('jurusan.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class=" col-6 mb-4">
                        <label for="namajurusan" class="form-label">Nama Jurusan</label>
                        <input type="text" class="form-control" name="nama_jurusan" id="namajurusan" placeholder="Nama Jurusan">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="fakultas" class="form-label">Fakultas</label>
                        <input type="text" class="form-control" name="fakultas" id="fakultas" placeholder="Fakultas">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="jumlah_sks" class="form-label">Jumlah SKS</label>
                        <input type="text" class="form-control" id="jumlah_sks" name="jumlah_sks" placeholder="Jumlah SKS">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="kuota" class="form-label">Kuota</label>
                        <input type="text" class="form-control" id="kuota" name="kuota" placeholder="Kuota">
                    </div>
                    <div class=" col-12 mb-4 text-right">
                        <button type="submit" class="btn btn-info rounded">Simpan</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection