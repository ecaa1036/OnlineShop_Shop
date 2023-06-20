<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class HomeController extends Controller
{
    //
    function show(){
        $data['_produks'] = Produk::all();
        return view('home',$data);

    }
    function card($id){
        $data['_produks'] = Produk::find($id);
        // $data['produks'] = Produk::first();
        return view('detail',$data);
    }
}
