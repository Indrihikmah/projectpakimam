<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .hero {
            background: url('https://example.com/coffee-hero.jpg') no-repeat center center;
            background-size: cover;
            height: 300px;
            color: white;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero h1 {
            font-size: 4rem;
        }
    </style>
</head>
<body>
    <form action="/user/pesanan" method="post">
        @csrf
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
<div class="t">
    <h2 style="font-size: 25px; padding-top: 20px; margin-left: 325px">FROM THE BEST INDONESIAN SPECIALITY COFFE TO HEART</h2>
    <h3 style="font-size: 28px; margin-top: 28px; margin-left:590px">OUR MENU</h3>
    <h4 style="margin-left: 613px; margin-top: -20px; font-weight:bold;">__________</h4>
</div>

    <div class="container mt-3" style="padding-top: 35px">
        <div class="row">
            <div class="card col-3 " style="width: 200px; height:270px; padding-top: 10px; margin-right: 10px">
                <img src="{{asset('assets/foto/kopi1.png')}}" style="margin-left: 40px; margin-right: 35px " width="178" height="150" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="nav-link" style="color: black; margin-left: 85px" href="#">Cappuccino</a><br>
                        <a href="nav-link" style="color: black; margin-left: 80px" href="#">IDR 35.000,00</a>
                        <button type="submit" class="btn btn-danger btn-block;" style="margin-left: 38%; margin-top:10px; ">Pesan</button>
                    </li>
                </ul>
            </div>
            <div class="card col-3" style="width: 200px; height:270px; padding-top: 5px; margin-right: 10px">
                <img src="{{asset('assets/foto/kopi2.png')}}" style="margin-left: 40px; margin-top:22px " width="170" height="120" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="nav-link" style="color: black; margin-left: 100px" href="#">Espresso</a><br>
                        <a href="nav-link" style="color: black; margin-left: 80px" href="#">IDR 30.000,00</a>
                        <button type="submit" class="btn btn-danger btn-block;" style="margin-left: 38%; margin-top:23px; ">Pesan</button>
                    </li>
                </ul>
            </div>
            <div class="card col-3" style="width: 200px; height:270px; margin-right: 10px">
                <img src="{{asset('assets/foto/kopi3.png')}}" style="margin-left: 40px; margin-top:30px" width="175" height="120" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="nav-link" style="color: black; margin-left: 90px" href="#">Americano</a><br>
                        <a href="nav-link" style="color: black; margin-left: 80px" href="#">IDR 33.000,00</a>
                        <button type="submit" class="btn btn-danger btn-block;" style="margin-left: 40%; margin-top:20px; ">Pesan</button>
                    </li>
                </ul>
            </div>
            <div class="card col-3" style="width: 200px; height:270px; margin-right: -100px">
                <img src="{{asset('assets/foto/kopi4.png')}}" style="margin-left: 40px; margin-top:30px " width="175" height="120" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="nav-link" style="color: black; margin-left: 100px" href="#">Ristretto</a><br>
                        <a href="nav-link" style="color: black; margin-left: 85px" href="#">IDR 32.000,00</a>
                        <button type="submit" class="btn btn-danger btn-block;" style="margin-left: 40%; margin-top:20px; ">Pesan</button>
                    </li>
                </ul>
            </div>
            <div class="card col-3" style=" margin-top: 30px; width: 200px; height:270px; margin-right: 10px">
                <img src="{{asset('assets/foto/kopi5.png')}}" style="margin-left: 40px; margin-top:30px " width="175" height="120" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="nav-link" style="color: black; margin-left: 95px" href="#">Macchiato</a><br>
                        <a href="nav-link" style="color: black; margin-left: 85px" href="#">IDR 35.000,00</a>
                        <button type="submit" class="btn btn-danger btn-block;" style="margin-left: 100px; margin-top:20px; ">Pesan</button>
                    </li>
                </ul>
            </div>
            <div class="card col-3" style=" margin-top: 30px; width: 200px; height:270px">
                <img src="{{asset('assets/foto/kopi6.png')}}" style="margin-left: 40px; margin-top:30px " width="175" height="120" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="nav-link" style="color: black; margin-left: 100px" href="#">Flat White</a><br>
                        <a href="nav-link" style="color: black; margin-left: 85px" href="#">IDR 38.000,00</a>
                        <button type="submit" class="btn btn-danger btn-block;" style="margin-left: 100px; margin-top:20px; ">Pesan</button>
                    </li>
                </ul>
            </div>
            <div class="card col-3" style=" margin-top: 30px; width: 200px; height:270px; margin-left: 10px">
                <img src="{{asset('assets/foto/kopi7.png')}}" style="margin-left: 40px; margin-top:30px " width="180" height="115" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="nav-link" style="color: black; margin-left: 110px" href="#">Nescafe</a><br>
                        <a href="nav-link" style="color: black; margin-left: 90px" href="#">IDR 45.000,00</a>
                        <button type="submit" class="btn btn-danger btn-block;" style="margin-left: 100px; margin-top:20px; ">Pesan</button>
                    </li>
                </ul>
            </div>
            <div class="card col-3" style=" margin-top: 30px; width: 200px; height:270px; margin-right: -100px; margin-left: 10px">
                <img src="{{asset('assets/foto/kopi8.png')}}" style="margin-left: 40px; margin-top:30px " width="180" height="115" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="nav-link" style="color: black; margin-left: 95px" href="#">Coffe Latte</a><br>
                        <a href="nav-link" style="color: black; margin-left: 85px" href="#">IDR 40.000,00</a>
                        <button type="submit" class="btn btn-danger btn-block;" style="margin-left: 100px; margin-top:20px; ">Pesan</button>
                    </li>
                </ul>
            </div>
        </div>
      </div>


    <div class="container">
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div class="hero">
        <div>
            <h1>Welcome to MeeCoffe</h1>
            <p>Your favorite coffee, just a click away!</p>
        </div>
    </div>
    <div class="container">
    </div>
    </form>

</body>
</html>
