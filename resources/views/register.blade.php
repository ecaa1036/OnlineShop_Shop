<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register ELSA</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
<style>
    body{
        background-color: rgb(61, 163, 222);
    }
</style>
<style type="text/css">
    .pagination li{
        float: left;
        list-style-type:none ;
        margin: 5px;
    }
</style>
<form action="/daftar/create" method="post">
        @csrf
        <div class="container h-100">
            <div class="row h-50 d-flex justify-content-center align-items-center">
                <div class="col-md-4 py-4">
                    <h2 class="fw-bold text-center">Register</h2>
                    <div class="col-mb-3">
                        <label for="" class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Masukan nama">
                    </div>
                    {{-- <div class="col-mb-3">
                        <label for="" class="form-lable">No Hp</label>
                        <input type="number" name="nohp" id="nohp" class="form-control" placeholder="Masukan nohp">
                    </div> --}}
                    <div class="col-mb-3">
                        <label for="" class="form-lable">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukan email">
                    </div>
                    <div class="col-mb-3">
                        <label for="" class="form-lable">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukan password">
                    </div>
                    <div class="pt-3">
                        <input type="submit" value="Register" class="form-control btn btn-primary">
                    </div>
                    <div class="text-center">
                        <a class="small" href="login">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>

