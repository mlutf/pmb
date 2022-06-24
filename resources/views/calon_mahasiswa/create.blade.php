@extends('layout.main')
@section('judul','Calon Mahasiswa')
@section('container')

<div class="container">
    <div class=" col-12 mb-4">
        <a href="{{url('calon_mahasiswa')}}" class="btn btn-dark rounded">Back</a>
    </div>
    <div class="card shadow-lg">
        <div class="card-body">
            <form action="{{route('calon_mahasiswa.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class=" col-6 mb-4">
                        <label for="namamahasiswa" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control"  name="nama_mahasiswa" id="namamahasiswa" placeholder="Nama Pengguna">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" id="jeniskelamin" placeholder="Jenis Kelamin">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="tgl" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Tgl">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="no_hp" class="form-label">No Hp</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Hp">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email"  placeholder="Email">
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <!-- <input type="text" class="form-control" id="jurusan" name="id_jurusan" placeholder="jurusan"> -->
                        <!-- <form action="/biaya" method="GET"> -->
                        <!-- <input type="text" name="test"> -->
                        <select class="form-control" name="id_jurusan" id="mySelect" onchange="myFunction()">
                            <option disabled selected>--Pilih Jurusan--</option>
                            @foreach($jurusan as $jurusan)
                            <option value="{{$jurusan->id}}">{{$jurusan->nama_jurusan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" col-6 mb-4">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <!-- <input type="text" class="form-control" id="jurusan" name="id_jurusan" placeholder="jurusan"> -->
                        <!-- <form action="/biaya" method="GET"> -->
                        <!-- <input type="text" name="test"> -->
                        <select class="form-control" name="id_jurusan" id="mySelect" onchange="myFunction()">
                            <option disabled selected>--Pilih Jurusan--</option>
                           
                        </select>
                    </div>
                        <!-- <button type="submit"></button> -->
            </form>
            <!-- <select id="mySelect" onchange="myFunction()">
                            <option value="Audi">Audi</option>
                            <option value="BMW">BMW</option>
                            <option value="Mercedes">Mercedes</option>
                            <option value="Volvo">Volvo</option>
                        </select> -->
        </div>
        <div class="col-6">
            <p id="demo"></p>
            <input type="hidden" class="form-control" id="biaya" name="biaya" placeholder="Biaya">
        </div>
        <div class=" col-12 mb-4 text-right">
            <button type="submit" class="btn btn-info rounded">Simpan</button>
        </div>

    </div>
    </form>
</div>
</div>
</div>
<script>
    function myFunction() {
        var x = document.getElementById("mySelect").value;
        if (x == "1") {
            x = "x";
            $("#biaya").prop("value", x);
        } else if (x == "2") {
            x = "10.000.000";
            $("#biaya").prop("value", x);
        } else if (x == "4") {
            x = "5.000.000";
            $("#biaya").prop("value", x);
        } else if (x == "5") {
            x = "7.000.000";
            $("#biaya").prop("value", x);
        } else {
            x = "5.500.000";
            $("#biaya").prop("value", x);
        }
        document.getElementById("demo").innerHTML = "Biaya: Rp." + x;
    }
</script>

@endsection