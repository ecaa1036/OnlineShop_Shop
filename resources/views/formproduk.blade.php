{{-- @extends('template')
@section('content') --}}
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>produk elsa</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </head>
    <body>
        <form action="{{ $action }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="container p-3 mt-5">
                    <form action="">
                        <h2 class="fw-bold text-center">Input Produk</h2>

                        <div class="col-mb-3">
                            <label for="" class="form-label">Id Produk</label>
                            <input type="text" name="id_produk" class="form-control" value="{{ $produk->id_produk}}"  placeholder="Masukan Id">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="{{ $produk->nama_produk}}"  placeholder="Masukan nama produk">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Jenis produk</label>
                            <input type="text" name="jenis_produk" class="form-control" value="{{ $produk->jenis_produk}}"  placeholder="Masukan Jenis produk">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Merk</label>
                            <input type="text" name="merk" class="form-control" value="{{ $produk->merk}}"  placeholder="Masukan merk">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Ukuran</label>
                            <input type="text" name="ukuran" class="form-control" value="{{ $produk->ukuran}}"  placeholder="Masukan ukuran">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Harga</label>
                            <input type="text" name="harga" class="form-control" value="{{ $produk->harga}}"  placeholder="Masukan Harga">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Stok</label>
                            <input type="text" name="stok" class="form-control" value="{{ $produk->stok}}"  placeholder="Masukan Stok">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Kategori</label>
                            <input type="text" name="kategori" class="form-control" value="{{ $produk->kategori }}"  placeholder="Masukan kategori">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" value="{{ $produk->deskripsi}}" placeholder="Masukan deskripsi">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Foto</label>
                            <input type="file" name="foto" id="foto" class="form-control" value="{{ $produk->foto}}" placeholder="Masukan foto">
                        </div>
                        <div class="pt-3">
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </form>    
    </body>
    </html>
 {{-- @endsection    --}}