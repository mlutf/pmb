<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\CalonMahasiswa;
use App\Models\Jurusan;
use App\Models\User;
use Illuminate\Http\Request;

class CalonMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calonMahasiswa = CalonMahasiswa::all();
        return view('calon_mahasiswa.index', compact('calonMahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        $user = User::all();
        return view('calon_mahasiswa.create', compact('jurusan', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        CalonMahasiswa::create($request->all());

        return redirect()->route('calon_mahasiswa.index')
            ->with('alert', 'Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CalonMahasiswa  $calonMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(CalonMahasiswa $calonMahasiswa)
    {

        $jurusan = Jurusan::all();
        return view('calon_mahasiswa/show', compact('jurusan', 'calonMahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CalonMahasiswa  $calonMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(CalonMahasiswa $calonMahasiswa)
    {
        $jurusan = Jurusan::all();
        return view('calon_mahasiswa.edit', compact('calonMahasiswa', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CalonMahasiswa  $calonMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CalonMahasiswa $calonMahasiswa)
    {

        $calonMahasiswa->update($request->all());
        return redirect('calon_mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CalonMahasiswa  $calonMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::table('calonmahasiswa')->where('id', $request->id)->delete();

        return redirect()->back();
    }
}
