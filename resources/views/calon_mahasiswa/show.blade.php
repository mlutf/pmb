@extends('layout.main')
@section('judul','Struk')
@section('container')
<div class="container">
    <div class="row Justify-content-center">
        <div class="col-12 text-center">
            <h2>Program Penerimaan Siswa Baru</h2>
            <h2><u>Universitas Pendidikan Indonesia (UPI)</u> </h2>
            <p>Jln Raya jhahah</p>
        </div>
        <div class="col-12 text-center">
            <h2>Struk Pendaftaran</h2>
        </div>
        <div class="col-12">
            <p>id :{{$calonMahasiswa->id}}</p>
        </div>
        <div class="col-12">
            <p>Nama Mahasiswa :{{$calonMahasiswa->nama_mahasiswa}}</p>
            <p>Tanggal Transaksi : {{$calonMahasiswa->created_at}}</p>
        </div>
        <div class="col-12">
            <table class="table">
                <tr>
                    <td>Asal Sekolah</td>
                    <td>Jurusan</td>
                </tr>
                <tr>
                    <td>{{$calonMahasiswa->asal_sekolah}}</td>
                    <td>{{$calonMahasiswa->datajurusan->nama_jurusan}}</td>
                </tr>
            </table>
        </div>

        <div class=" col-12 mb-4">
            <a href="{{url('calon_mahasiswa')}}" class="btn btn-dark rounded">Back</a>
        </div>
    </div>
</div>

@endsection