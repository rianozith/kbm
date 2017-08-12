<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\murid;
use Illuminate\Support\Facades\DB;
use Session;


class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $murid = \DB::table('murids')
        //     ->join('kegiatans', 'murids.kegiatan_id', '=', 'kegiatans.id')
        //     ->select(
        //         'murids.id',
        //         'murids.nama_murid',
        //         'murids.umur_murid',
        //         'murids.alamat_murid',
        //         'murids.nohp_murid',
        //         'murids.kelas_murid',
        //         'murids.kegiatan_id',
        //         'kegiatans.nama_kegiatan'
        //     )
        //     ->paginate(10);

        $murid = murid::paginate(10);

        // $murid = murid::paginate(10); // get data dgn paginasi 
        // return view('kbm.murid_input',compact('murid')); // load view dan kirim data
        return view('siswa.index', compact('murid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        \App\murid::create($request->all());
        \Session::flash('flash_message',' Data Saved'); //<--FLASH MESSAGE
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $murid = murid::find($id);
        return view('siswa.show', compact('murid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $murid = murid::findOrFail($id);
        return view('siswa.edit', compact('murid'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $murid = murid::findOrFail($id);
        $murid->update($request->all());
        \Session::flash('flash_message',' successfully Updated.'); //<--FLASH MESSAGE

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        murid::find($id)->delete();

        // return redirect()->route('siswa.index');  
        \Session::flash('flash_message',' successfully delete.'); //<--FLASH MESSAGE

        return redirect()->route('siswa.index');
    }
}
