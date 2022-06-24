@extends('layout.main')
@section('judul','User')
@section('container')
<div class="my-3">
    <a href="{{route('users.create')}}" class="btn btn-primary rounded">Tambah Data</a>
</div>

<table class="table">
    <thead class="table-dark">
        <td>No</td>
        <td>Nama Pengguna</td>
        <td>Jenis Kelamin</td>
        <td>No Hp</td>
        <td>Jabatan</td>
        <td>Username</td>
        <td>Password</td>
        <td>Action</td>
    </thead>
    @foreach($user as $user)
    <thead>
        <td>{{$loop->iteration}}</td>
        <td>{{$user->nama_pengguna}}</td>
        <td>{{$user->jenis_kelamin}}</td>
        <td>{{$user->no_hp}}</td>
        <td>{{$user->jabatan}}</td>
        <td>{{$user->username}}</td>
        <td>{{$user->password}}</td>
        <td>
            <div>
                <a href="{{route('users.edit',$user->id)}}" class="btn btn-info rounded "> Edit</a>
                <div type="submit" class="btn btn-danger rounded" onclick="fcthapus('{{$user->id}}')"> Delete
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
                document.location.href = "{{url('users/hapus/')}}" + "/" + id;
            }
        })
    }
</script>
@endsection