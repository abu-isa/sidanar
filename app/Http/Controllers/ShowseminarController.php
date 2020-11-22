<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ShowseminarController extends Controller
{
    public function index(){
        $currentDay = date('d');
        $currentMonth = date('m');

        $data = DB::table('seminars')->select('judul','tanggal','id')->whereDay('tanggal','>',$currentDay)->whereMonth('tanggal','=',$currentMonth)->where('status','1')->orderBy('tanggal', 'asc')->get();
        return view('halamandepan',['data' => $data]);
    }

    public function show(){
    	$currentDay = date('d');
    	$currentMonth = date('m');

        $data = DB::table('seminar')->select('judul','tanggal','id')->whereDay('tanggal','>',$currentDay)->whereMonth('tanggal','=',$currentMonth)->where('status','1')->orderBy('tanggal', 'asc')->get();
        return view('daftarseminar',['data' => $data]);
    }

    public function showsuccess(Request $request, $id){
        DB::update('update form set status_pembayaran=? where id = ?',['success',$id]);

        $form = DB::table('form')->where('id',$id)->get();
        $data = DB::table('seminar')->where('id',$form[0]->pilihan)->get();
        session()->flash('notifsuccess','Pembayaran telah diterima, terimakasih!');
        return view('ringkasanpembayaran',['data' => $data,'form'=>$form]);
    }

    public function showpending(Request $request, $id){
        DB::update('update form set status_pembayaran=? where id = ?',['pending',$id]);

        $form = DB::table('form')->where('id',$id)->get();
        $data = DB::table('seminar')->where('id',$form[0]->pilihan)->get();
        session()->flash('notifpending','Pembayaran belum diterima, segera selesaikan pembayaran!');
        return view('ringkasanpembayaran',['data' => $data,'form'=>$form]);
    }

    
}
