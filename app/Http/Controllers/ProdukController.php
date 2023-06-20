<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Produk;

class ProdukController extends Controller
{
    //
    function show(){
        // $data['_produks'] = Produk::all();
        $data['_produks'] = Produk::cursorPaginate(6);
        return view('produk',$data);
    }

    function add(){
        $data=[
            'action'=>url('produk/create'),
            'tombol'=>'Simpan',
            'produk'=>(object)[
                'id_produk'=>'',
                'nama_produk'=>'',
                'jenis_produk'=>'',
                'merk'=>'',
                'ukuran'=>'',
                'harga'=>'',
                'stok'=>'',
                'kategori'=>'',
                'deskripsi'=>'',
                'foto'=>'',
            ]
            ];
        return view('formproduk',$data);
    }
    function create(Request $req){

        // $namafile = $req->nis.".".$req->file('foto')->getClientOriginalExtension();

        // $this->validate($req, [
        //     'nis' => 'required|min:5|numeric',
        //     'nama' => 'required|string|max:10',
        //     'foto' => 'mimes:jpg,png'
        // ]);

        Produk::create([
            'id_produk' => $req->id_produk,
            'nama_produk' => $req->nama_produk,
            'jenis_produk' => $req->jenis_produk,
            'merk' => $req->merk,
            'ukuran' => $req->ukuran,
            'harga' => $req->harga,
            'stok' => $req->stok,
            'kategori' => $req->kategori,
            'deskripsi' => $req->deskripsi,
            'foto' => $req->file('foto')->store('foto')
        ]);

        return redirect('produk');

    }
      function hapus($id_produk){
          $produk = Produk::where('id_produk', $id_produk)->delete();
        //   $produk->delete();
        //   Storage::delete($produk->foto );
          return redirect('produk');
      }

      function edit($id_produk){
        $data['produk'] = Produk::find($id_produk);
        $data['action'] = url('produk/update'). '/' .$data['produk']->id_produk;
        $data['tombol'] = 'Update';

        // $data['produk'] = Produk::where('id','$id')->get();
        return view('formproduk', $data);
    }

      function update(Request $req){
        Produk::where('id_produk',$req->id_produk)->update([
            'id_produk' => $req->id_produk,
            'nama_produk' => $req->nama_produk,
            'jenis_produk' => $req->jenis_produk,
            'merk' => $req->merk,
            'ukuran' => $req->ukuran,
            'harga' => $req->harga,
            'stok' => $req->stok,
            'kategori' => $req->kategori,
            'deskripsi' => $req->deskripsi,
            'foto' => $req->file('foto')->store('foto')

        ]);
        return redirect('produk');
       }

    //    function cari(Request $req){

    //     $data['portopolio'] = portopolio::where('nama','like',$req->cari. "%")
    //     ->orwhere('kategori','like',$req->cari. "%")
    //     ->orwhere('deskripsi','like',$req->cari. "%")
    //     ->paginate();

    //     $data['cari'] = $req->cari;
    //     return view('portopolio',$data);
    //   }

    function cari(Request $req){

        $data['_produks'] = Produk::where('id_produk','like',$req->cari. "%")
        ->orwhere('nama_produk','like',$req->cari. "%")
        ->orwhere('jenis_produk','like',$req->cari. "%")
        ->orwhere('merk','like',$req->cari. "%")
        ->paginate();

        $data['cari'] = $req->cari;
        return view('produk',$data);
      }

     function template(){
        return view('template');
     }
     function tampilan(){
        return view('tampilan');
     }
}
