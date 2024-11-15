<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pondok Orange</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <nav class="navbar" id="navbar">
        <div class="max-width">
            <div>
                <div class="logo"><a href="#"><span id="colored2">Pondok</span><span id="colored"> Orange</span></a></div>
                <ul class="menu">
                    <li><a href="index1" class="menu-btn" id="change">Home</a></li>
                    <li><a href="about" class="menu-btn" id="change2">About</a></li>
                    <li><a href="menu" class="menu-btn" id="change3">Menu</a></li>
                    <li><a href="location" class="menu-btn" id="change4">Location</a></li>
                    <li><a href="order" class="menu-btn" id="change5">Order</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="order" id="order">
        <div class="max-width" id="order">
            <h2 class="title">Order Here</h2>
            <div id="card">
                <div id="form-content">
                    <form method="post" class="form">
                        <label for="nama-pelanggan" style="padding-top:13px">&nbsp;Nama</label>
                        <input
                            id="nama-pelanggan"
                            class="form-content"
                            type="text"
                            name="nama"
                            autocomplete="on"
                            required />
                        <div class="form-border"></div>
                        <label for="nomor-hp" style="padding-top:22px">&nbsp;Nomor Handphone</label>
                        <input
                            id="nomor-hp"
                            class="form-content"
                            type="text"
                            name="nomor-hp"
                            required />
                        <div class="form-border"></div>
                        <label for="alamat-tujuan" style="padding-top:22px">&nbsp;Alamat</label>
                        <input
                            id="alamat-tujuan"
                            class="form-content"
                            type="text"
                            name="alamat-tujuan"
                            required />
                        <div class="form-border"></div>
                        <div class="menuc">
                            <p>Menu</p>
                            <input type="text" name="menu">
                            <label>Bubur Pedas</label><br>
                            <input type="text" name="menu">
                            <label>Mie Sagu Rebus</label><br>
                            <input type="text" name="menu">
                            <label>Mie Sagu Goreng</label><br>
                            <input type="text" name="menu">
                            <label>Mie Ayam</label><br>
                            <input type="text" name="menu">
                            <label>Indomie</label><br>
                            <input type="text" name="menu">
                            <label>Es Teh</label><br>
                            <input type="text" name="menu">
                            <label>Air Tahu</label><br>
                            <input type="text" name="menu">
                            <label>Es Jeruk Besar</label><br>
                            <input type="text" name="menu">
                            <label>Mineral</label><br>
                            <div class="form-border"></div>
                        </div>
                        <div class="pay">
                            <p>Pembayaran</p>
                            <input type="radio" id="pay1" name="payment" checked>
                            <label for="pay1">BANK</label><br>
                            <input type="radio" id="pay2" name="payment" checked>
                            <label for="pay2">Shopeepay</label><br>
                            <input type="radio" id="pay3" name="payment" checked>
                            <label for="pay3">DANA</label>
                        </div>
                        <a href="#"><input id="submit-btn" type="submit" name="submit" value="ORDER" /></legend></a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <span><span class="fa fa-copyright"></span> <b>Copyright</b> <span class="name-fill">Pondok Orange.</span> | 2024 All Rights Reserved.
            <br>
            Made By <span class="name-fill">Pondok Orange.</span></span>
    </footer>

</body>

</html>