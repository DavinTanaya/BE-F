<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <div class="left-nav">
                <div class="left-item">
                    <p>☰</p>
                </div>
                <div class="left-item logo">
                    <p>RentCar</p>
                </div>
            </div>
            <div class="right-nav">
                <div class="right-item">
                    <a href="">Login</a>
                </div>
                <div class="right-item">
                    <a href="">Register</a>
                </div>
            </div>
        </nav>
        <main>
            <div class="content">
                <div class="judul">
                    <h1>Selamat Datang di Rental Mobil kami</h1>
                </div>
                <div class="filter">
                    <form action="">
                        <div class="pickup-date">
                            <label for="pickup">Pickup Date:</label>
                            <input type="date" placeholder="Select Pickup Date" name="pickup" id="pickup">
                        </div>
                        <div class="return-date">
                            <label for="return">Return Date:</label>
                            <input type="date" placeholder="Select Return Date" name="return" id="return">
                        </div>
                        <div class="select-tahun">
                            <label for="tahun">Filter Tahun Pembuatan</label>
                            <select name="tahun" id="tahun">
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                            </select>
                        </div>
                        <div class="cari">
                            <a href="">Cari</a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer">
                <p>© RentCar App. Semua Hak Dilindungi.</p>
            </div>
        </footer>
    </div>
</body>
</html>