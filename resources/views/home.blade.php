@extends('tampilan')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Shop Pkk</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
    
</body>
</html>
<!-- Section-->
<section>
<div class="container pt-3">
<h3 class="fw-bold">-----</h3>
  <div class="row justify-content-center">
     @foreach ($_produks as $item)
       <div class="col col-md-4 mb-5 text-center">
            <div class="card mt-5 ms-4" style="width: 18rem;">
                <!-- Product image-->
                  <img src="/storage/{{ $item->foto }}" width="200" alt="">
                 <div class="card-body text-center">                            
                    <h5 class="card-text">{{$item->nama_produk}}</h5>
                    <p class="card-text">{{$item->merk}}</p>
                    <p class="card-text">{{$item->harga}}</p>
                    <a href="home/card/{{ $item->id_produk }}" class="btn mt-auto text-white" style="background-color: rgb(36, 79, 197)">View Options</a>
                 </div>
            </div>
        </div>
        @endforeach                           
    </div>
</div>
</div>
</div>
</section>

@endsection
