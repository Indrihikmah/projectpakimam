<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Pesanan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Pesanan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <form action="/user/kiriman" method="get">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Coffe Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>



        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="margin-left: 855px" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="margin-left: 20px" href="/menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="margin-left: 20px" href="#">Pesanan</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Rincian Pesanan</h4>
                    </div>
                    <div class="card-body">
                        <div class="order-summary">
                            <h5>Pesanan #12345</h5>
                            <p><strong>Nama Pelanggan:</strong> Yurri</p>
                            <p><strong>Tanggal Pesanan:</strong> 4 September 2024</p>

                            <h6>Detail Pesanan</h6>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cappuccino
                                    <span class="badge badge-primary badge-pill">1 x $35</span>
                                </li>
                            </ul>
                            <h5>Total: $35</h5>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        Status: <span class="text-success">Dikirim</span>
                        <button>Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</form>
</body>
</html>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Pesanan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Coffe Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>



        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="margin-left: 855px" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="margin-left: 20px" href="#">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="margin-left: 20px" href="#">Pesanan</a>
                </li>
            </ul>
        </div>
    </nav>


<div class="row justify-content-center align-items-center" style="margin-top: -90px; height: 100vh; margin-right: 300px;">
    <div class="col-25 col-md-14">
                <h3 style="margin-right: 750px; margin-top: 30px">Daftar Pesanan</h3>
                <div class="row">
                    <div class="card col-4" style="border-radius: 5%; width: 100px; height: 400px; padding-top: 20px; margin-right: 10px; margin-left: 20px">
                <img src="{{asset('assets/foto/kopi1.png')}}" style="border-radius: 20%; margin-left: 48px; margin-right: 890px; margin-top: -8px" width="200" height="100" alt="">
                <button style=" border-radius: 30%; margin-top: 10px; margin-left: 20px; width: 55px; background-color: rgb(221, 169, 132)">4.5</button>
                    <a href="nav-link" style="color: black; margin-left: 85px; margin-top: -45px" href="#"></a><br> --}}
            {{-- <div class="card-body">
                <div class="form-group">
                    <label for="username">Kode Pesanan</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Nama Pesanan</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>
                <button style="" type="submit" class="btn btn-primary btn-block">Login</button>
            </div> --}}
        {{-- </div>
    </div>
</div> --}}
{{-- <div class="container mt-5">
    <div class="card col-3">

    </div>
    <h1 class="mb-4">Laporan Pesanan</h1>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Item</th>
                <th>Jumlah</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>Kopi</td>
                <td>2</td>
                <td><span class="badge badge-success">Selesai</span></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td>Teh</td>
                <td>1</td>
                <td><span class="badge badge-warning">Proses</span></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Mark Johnson</td>
                <td>Sandwich</td>
                <td>3</td>
                <td><span class="badge badge-danger">Dibatalkan</span></td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Script Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

{{-- </body>
</html> --}}
