@extends('layout.main')
@section('judul','Calon Mahasiswa')
@section('container')

<div class="container">
    <div class=" col-12 mb-4">
        <a href="{{url('calon_mahasiswa')}}" class="btn btn-dark rounded">Back</a>
    </div>
    <div class="card shadow-lg">
        <div class="card-body">
            <form action="{{route('calon_mahasiswa.update',$calonMahasiswa->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class=" col-6 mb-4">
                        <label for="namamahasiswa" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama_mahasiswa" id="namamahasiswa" placeholder="Nama Pengguna" value="{{$calonMahasiswa->nama_mahasiswa}}">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" id="jeniskelamin" placeholder="Jenis Kelamin" value="{{$calonMahasiswa->jenis_kelamin}}">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="tgl" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Tgl" value="{{ date('Y-m-d', strtotime($calonMahasiswa->tgl)) }}">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="alamat" class="form-label">Alamat</label>
                        <!-- <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control">{{$calonMahasiswa->alamat}}</textarea> -->
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{$calonMahasiswa->alamat}}">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="no_hp" class="form-label">No Hp</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Hp" value="{{$calonMahasiswa->no_hp}}">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah" value="{{$calonMahasiswa->asal_sekolah}}">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$calonMahasiswa->email}}">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <!-- <input type="text" class="form-control" id="jurusan" name="id_jurusan" placeholder="jurusan" value="{{$calonMahasiswa->id_jurusan  }}"> -->
                        <select class="form-control" name="id_jurusan">
                            @foreach($jurusan as $jurusan)
                            <option value="{{$jurusan->id}}" {{$calonMahasiswa->id_jurusan==$jurusan->id? 'selected':null}}>{{$jurusan->nama_jurusan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">

                        <input type="button" disabled class="form-control" id="email" name="biaya" placeholder="Email" value="Biaya : Rp.{{$calonMahasiswa->biaya}}">
                    </div>

                    <div class=" col-12 mb-4 text-right">
                        <button type="submit" class="btn btn-info rounded">Update</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection