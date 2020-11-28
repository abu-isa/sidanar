<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'forms';
    protected $fillable = ['name','email','mobile_number','pilihan','alamat','remember_token','created_at','updated_at','status_pembayaran'];
}
