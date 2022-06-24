@extends('layout.main')
@section('judul','User')
@section('container')

<div class="container">
    <div class=" col-12 mb-4">
        <a href="{{url('users')}}" class="btn btn-dark rounded">Back</a>
    </div>
    <div class="card shadow-lg">
        <div class="card-body">
            <form action="{{route('users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class=" col-6 mb-4">
                        <label for="namapengguna" class="form-label">Nama Pengguna</label>
                        <input type="text" class="form-control" name="nama_pengguna" id="namapengguna" placeholder="Nama Pengguna" value="{{$user->nama_pengguna}}">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" id="jeniskelamin" placeholder="Jenis Kelamin" value="{{$user->jenis_kelamin}}">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="nohp" class="form-label">No Hp</label>
                        <input type="text" class="form-control" id="nohp" name="no_hp" placeholder="No Hp" value="{{$user->no_hp}}">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" value="{{$user->jabatan}}">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="username" value="{{$user->username}}">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{$user->password}}">
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