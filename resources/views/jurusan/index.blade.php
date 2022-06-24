@extends('layout.main')
@section('judul','Jurusan')
@section('container')
<div class="my-3">
    <a href="{{route('jurusan.create')}}" class="btn btn-primary rounded">Tambah Data</a>
</div>

<table class="table">
    <thead class="table-dark">
        <td>No</td>
        <td>Nama Jurusan</td>
        <td>Fakultas</td>
        <td>Jumlah SKS</td>
        <td>Kuota</td>
        <td>Action</td>
    </thead>
    @foreach($jurusan as $jurusan)
    <thead>
        <td>{{$loop->iteration}}</td>
        <td>{{$jurusan->nama_jurusan}}</td>
        <td>{{$jurusan->fakultas}}</td>
        <td>{{$jurusan->jumlah_sks}}</td>
        <td>{{$jurusan->kuota}}</td>
        <td>
            <div>
                <a href="{{route('jurusan.edit',$jurusan->id)}}" class="btn btn-info rounded "> Edit</a>
                <div type="submit" class="btn btn-danger rounded" onclick="fcthapus('{{$jurusan->id}}')"> Delete
                    <i class="bi bi-trash"></i>
                </div>
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
                document.location.href = "{{url('jurusan/hapus/')}}" + "/" + id;
            }
        })
    }
</script>
@endsection