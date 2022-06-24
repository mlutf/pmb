@extends('layout.main')
@section('judul','Struk')
@section('container')
<div class="my-3">
    <p>Struk Pendaftaran Calon Mahasiswa</p>
</div>

<table class="table border">
    <thead class="table-dark">
        <!-- <td>No</td> -->
        <td>Id Mahasiswa</td>
        <td>Nama Mahasiswa</td>
        <td>Jurusan</td>
        <td>Fakultas</td>
        <td>Biaya</td>
        <td>Tanggal Pendaftaran</td>

    </thead>
    @foreach($cama as $cama)
    <thead>
        <!-- <td>{{$loop->iteration}}</td> -->
        <td>{{$cama->id}}</td>
        <td>{{$cama->nama_mahasiswa}}</td>
        <td>{{$cama->datajurusan->nama_jurusan}}</td>
        <td>{{$cama->biaya}}</td>
        <td>{{$cama->biaya}}</td>
        <td>{{$cama->created_at}}</td>

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