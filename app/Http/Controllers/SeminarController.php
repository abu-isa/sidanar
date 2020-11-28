<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Seminar;

class SeminarController extends Controller
{
    public function index()
    {
        $seminar = Seminar::all();
        return view('admin.seminar.list_seminar', ['seminar' => $seminar]);
    }

    public function create()
    {
        return view('admin.seminar.add_seminar');
    }

    public function store(Request $request)
    {
        // dd($request);
        $currentDay = date('d');
        if($currentDay>$request->tanggal){
            return redirect()->back()->with('alert', 'Tanggal yang dimasukan sudah lewat!');
        }else{
            DB::table('seminars')->insert([
                'judul'     => $request->judul,
                'tanggal'   => $request->tanggal,
                'harga'     => $request->harga,
                'images'    => $request->images,
                'status'    => $request->status
            ]);
            // Seminar::create($request->all());
            return redirect('/list_seminar')->with('success', 'Seminar berhasil dimasukan!');
        }
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('admin.seminar.edit_seminar', compact('id'));
    }

    public function update(Request $request, $id)
    {
        $id::where('id', $id->id)
                ->update([
                    'judul'      => $request->judul,
                    'tanggal'      => $request->tanggal,
                    'harga'      => $request->harga,
                    'images'      => $request->images,
                    'status'      => $request->status 
                ]);
        return redirect('/list_seminar')->with('status', 'Data berhasil di rubah...!');
    }

    public function destroy(Seminar $seminar)
    {
        Seminar::destroy($seminar->id);
        return redirect('/list_seminar')->with('status', 'Data berhasil dihapus...!');
    }
}
