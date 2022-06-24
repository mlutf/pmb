@extends('layout.main')
@section('judul','Calon Mahasiswa')
@section('container')
<div class="my-3">
    <a href="{{route('calon_mahasiswa.create')}}" class="btn btn-primary rounded">Tambah Data</a>
</div>

<table class="table">
    <thead class="table-dark">
        <td>No</td>
        <td>Nama Mahasiswa</td>
        <td>Jenis Kelamin</td>
        <td>Tanggal Lahir</td>
        <td>Alamat</td>
        <td>No Hp</td>
        <td>Asal Sekolah</td>
        <td>Email</td>
        <td>Id Jurusan</td>
        <td>Action</td>
    </thead>
    @foreach($calonMahasiswa as $calonMahasiswa)
    <thead>
        <td>{{$loop->iteration}}</td>
        <td>{{$calonMahasiswa->nama_mahasiswa}}</td>
        <td>{{$calonMahasiswa->jenis_kelamin}}</td>
        <td>{{$calonMahasiswa->tgl}}</td>
        <td>{{$calonMahasiswa->alamat}}</td>
        <td>{{$calonMahasiswa->no_hp}}</td>
        <td>{{$calonMahasiswa->asal_sekolah}}</td>
        <td>{{$calonMahasiswa->email}}</td>
        <td>{{$calonMahasiswa->datajurusan->nama_jurusan}}</td>
        <td>
            <div>
                <a href="{{route('calon_mahasiswa.edit',$calonMahasiswa->id)}}" class="btn btn-info rounded "> Edit</a>
                <div type="submit" class="btn btn-danger rounded" onclick="fcthapus('{{$calonMahasiswa->id}}')"> Delete
                    <i class="bi bi-trash"></i>
                </div>

                <a href="/calon_mahasiswa/{{$calonMahasiswa->id}}" class="btn btn-primary rounded">Detail</a>
            </div>
        </td>
    </thead>
    @endforeach
</table>
<script>
    function fcthapus(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = "{{url('calon_mahasiswa/hapus/')}}" + "/" + id;
            }
        })
    }
</script>
@endsection