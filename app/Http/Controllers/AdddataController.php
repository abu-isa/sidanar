<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Validator;

class AdddataController extends Controller
{
    public function insert(Request $request){
		$this->validate($request,[
            'name' => 'required|min:5|max:100',
            'email' => 'required|email:rfc,dns',
            'mobile_number' => 'required|regex:/(08)[0-9]{9}/|min:11|numeric',
            'alamat' => 'required'
		]);
		$name = $request->input('name');
		$uppercasedname = Str::ucfirst($name);
		$email = $request->input('email');
		$mobile_number = $request->input('mobile_number');
		$pilihan = $request->input('pilihan');
		$alamat = $request->input('alamat');
		$created_at = new Carbon();
		$created_at ->timezone('Asia/Jakarta');
		$data = array(
			"name"=>$name,
			"email"=>$email,
			"mobile_number"=>$mobile_number,
			"pilihan"=>$pilihan,
			"alamat"=>$alamat, 
			"created_at"=>$created_at, 
			"status_pembayaran"=>'pending'
		);
		DB::table('forms')->insert($data);

		$form = DB::table('forms')->where('email',$email)->get();
		$seminar = DB::table('seminars')->where('id',$pilihan)->get();
		return view('confirmationpage',['form' => $form,'seminar' => $seminar]);
	}

	// public function insertdatabase(Request $request){

	//   	$status_code = $request->input("status_code");
	//   	$transaction_id = $request->input("transaction_id");
	//   	$order_id = $request->input("order_id");
	//   	$gross_amount = $request->input("gross_amount");
	//   	$payment_type = $request->input("payment_type");
	//   	$transaction_time = $request->input("transaction_time");
	//   	$transaction_status = $request->input("transaction_status");
	//   	$fraud_status = $request->input("fraud_status");
	//   	$finish_redirect_url = $request->input("finish_redirect_url");
	  
	//   	$datapembayaran = array(
	// 	   "status_code"=>$status_code,
	// 	   "transaction_id" => $transaction_id,
	// 	   "order_id" => $order_id,
	// 	   "gross_amount" => $gross_amount,
	// 	   "payment_type" => $payment_type,
	// 	   "transaction_time" => $transaction_time,
	// 	   "transaction_status" => $transaction_status,
	// 	   "fraud_status" => $fraud_status,
	// 	   "finish_redirect_url" => $finish_redirect_url
	//   	);

	// 	DB::table('midtrans')->insert($datapembayaran);

	// 	$currentDay = date('d');
	// 	$currentMonth = date('m');
	// 	$data = DB::table('seminar')->select('judul','tanggal','id')->whereDay('tanggal','>',$currentDay)->whereMonth('tanggal','=',$currentMonth)->where('status','1')->orderBy('tanggal', 'asc')->get();

	// 	return view('halamandepan',['data' => $data]);
	// }
}
