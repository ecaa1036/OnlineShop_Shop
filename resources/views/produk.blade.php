<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
        justify-content: center;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-danger flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Admin*:) </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <form action="{{ url ('produk/cari') }}" method="get">
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search" name="cari" id="cari">
    <input type="submit" value="SEARCH">
      {{-- <input type="search" name="cari" id="cari"> --}}
  </form>
  {{-- <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search"> --}}
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container">
  <div class="col-12">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="template">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="file" class="align-text-bottom"></span>
                Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="produk">
                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                Products
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="users" class="align-text-bottom"></span>
                Customers
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="laporan">
                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                Reports
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="layers" class="align-text-bottom"></span>
                Integrations
                </a>
            </li> --}}
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
            </h6>
            <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="home">
                <span data-feather="file-text" class="align-text-bottom"></span>
               Home
                </a>
            </li>
            </ul>
        </div>
        </nav>

        {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}
        <main class="container border py-5">
        <h2></h2>
        {{-- <div class="container" style="margin-top: 10%"> --}}
            <h2 class="fw-bold text-center">SHOE PRODUCTS</h2>
            <h2 class="fw-bold text-center py-3">
                <a class="" href="{{ url('produk/add')}}"><button class="btn btn-primary">Add Product</button></a></h2>
           
         <td rowspan="12">             
         </td>
        <div class="table-responsive">
            <div class="col-12">            
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>
                            <td rowspan="3"> </td>

                            <th>NO</th>
                            <th>Id Produk</th>
                            <th>Nama Produk</th>
                            <th>Jenis Produk</th>
                            <th>Merk</th>
                            <th>Ukuran</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($_produks as $key => $item)
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->id_produk }}</td>
                                <td>{{ $item->nama_produk }}</td>
                                <td>{{ $item->jenis_produk }}</td>
                                <td>{{ $item->merk }}</td>
                                <td>{{ $item->ukuran }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->stok }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>
                                    <img src="/storage/{{ $item->foto }}" width="100" alt="">
                                </td>
                                <td>
                                    <a href="produk/hapus/{{ $item->id_produk }}" class="btn btn-danger btn-sm">Hapus</a>
                                    <a href="produk/edit/{{ $item->id_produk }}" class="btn btn-success btn-sm">Edit</a>
                                </td>
                                </tr>
                            @endforeach
                    </tbody>
                    </table>
                   {{-- <h2 class="text-center"> --}}
                    Total   Produk: {{ $_produks->count() }}<br>
                    Total Per Halaman: {{ $_produks->perPage() }}<br>
                    {{ $_produks->Links() }}
                  {{-- </h2> --}}
                 </div>
            </div>
            </div>
        </div>
        </main>
    </div>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

 