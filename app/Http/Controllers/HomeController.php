<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\shoeru;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = array(
            'id' => "siswas",
            'siswas' => shoeru::all()
            
        );
        return view('siswa.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Siswa.create'); 
    }

  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' =>'required',
            'alamat' =>'required',
            'no_telepon' => 'required',
            
            'service' => 'required'
        ]);  

        shoeru::create([
              'nama' =>$request->nama,
              'alamat' =>$request->alamat,
              'no_telepon' =>$request->no_telepon,
              'Nama_sepatu' =>$request->Nama_sepatu,
              'service' =>$request->service,
           
          ]);

          return redirect('/')->with('success', 'Booking telah selesai');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data = array(
           'id' => 'siswas',
           'siswas' => shoeru::find($id)
       );
       return view('Siswa.edit')->with($data);
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
        $post = shoeru::find($id);
        $post->nama = $request->input('nama');
        $post->alamat = $request->input('alamat');
        $post->no_telepon = $request->input('no_telepon');
        $post->Nama_sepatu = $request->input('Nama_sepatu');
        $post->status_sepatu = $request->input('status_sepatu');
        $post->service = $request->input('service');
        $post->kode_booking = $request->input('kode_booking');
        

        $post->save();

        return redirect('/siswas')->with('status','Data telah berhasil di simpan!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= shoeru::find($id);
        $post->delete();

        return redirect('/siswas')->with('status','Data telah berhasil di hapus!!');
    }
}