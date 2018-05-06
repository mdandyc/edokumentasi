<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokumen;
use App\User;
use App\Kategori;
use Illuminate\Support\Facades\Input;
use File;
use Auth;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function uploadedfile()
    {
        $dokumen = Dokumen::where('usernameFK','=',Auth::user()->username)->paginate(4);
        return view('dokumen.index',compact('dokumen'));
    }
    public function index()
    {
            $dokumen = Dokumen::paginate(6);
       
        
        return view('dokumen.index',compact('dokumen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dokumen = Dokumen::all();
        $user = User::all();
        $kategori = Kategori::all();
        return view('dokumen.create',compact(['dokumen'],['user'],['kategori']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'nama_dokumen' => 'required|mimes:docx,pdf,doc,xlx,txt',
        'kategoriFK' => 'required',
        'keterangan' => 'required',
        'tanggal' => 'required',
        'usernameFK' => 'required',

    ]);
        $dokumen = new Dokumen;
        $doc = Input::file('nama_dokumen');
        if ($doc !== null) {
        $filename = time().'.'.$request->nama_dokumen->getClientOriginalName();
        $request->nama_dokumen->move(public_path('file'), $filename); 
        $dokumen->nama_dokumen = $filename;
        }
        $dokumen->kategoriFK = $request->kategoriFK;
        $dokumen->keterangan = $request->keterangan;
        $dokumen->tanggal = $request->tanggal;
        $dokumen->usernameFK = $request->usernameFK;
        
        
        $dokumen->save();
        return redirect('dokumen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        return view('dokumen.view',compact('dokumen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        $user = User::all();
        $kategori = Kategori::all();
        return view('dokumen.edit',compact(['dokumen'],['user'],['kategori']));
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
        $this->validate($request, [
        'nama_dokumen' => 'nullable|mimes:docx,pdf,doc,xlx,txt',
        'kategoriFK' => 'required',
        'keterangan' => 'required',
        'tanggal' => 'required',
        'usernameFK' => 'required',

    ]);
        $dokumen = Dokumen::find($id);
        $doc = Input::file('nama_dokumen');
        if ($doc !== null) {
        $filename = $request->nama_dokumen->getClientOriginalName();
        $request->nama_dokumen->move(public_path('file'), $filename); 
        $dokumen->nama_dokumen = $filename;
        }
        $dokumen->kategoriFK = $request->kategoriFK;
        $dokumen->keterangan = $request->keterangan;
        $dokumen->tanggal = $request->tanggal;
        $dokumen->usernameFK = $request->usernameFK;
        
        $dokumen->save();
        return redirect('dokumen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        $filename = public_path().'/file/'.$dokumen->nama_dokumen;
        $dokumen->delete();
        unlink($filename);
        return redirect('dokumen');
    }
    public function search(Request $request)
    {
        $keyword = $request['keyword'];
        // $branch = Branch::where('branchName','LIKE',"%{$keyword}%")->paginate(30);

        $dokumen = Dokumen::whereHas('kategori', function($query) use($keyword) {
        $query->where('jenis_kategori', 'like', "%{$keyword}%");
        })->orWhereHas('user', function($query) use($keyword) {
        $query->where('username', 'like', "%{$keyword}%")->orWhere('name', 'like', "%{$keyword}%")->orWhere('email', 'like', "%{$keyword}%");
        })->orWhere('nama_dokumen','LIKE',"%{$keyword}%")->orWhere('keterangan','LIKE',"%{$keyword}%")->orWhere('tanggal','LIKE',"%{$keyword}%")->paginate(6);

        return view('dokumen.index',compact('dokumen'));
    }
}
