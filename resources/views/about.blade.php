<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pondok Orange</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <nav class="navbar" id="navbar">
        <div class="max-width">
            <div>
                <div class="logo"><a href="#"><span id="colored2">Pondok</span><span id="colored"> Orange</span></a></div>
                <ul class="menu">
                    <li><a href="{{ url('index1') }}" class="menu-btn" id="change">Home</a></li>
                    <li><a href="{{ url('about') }}" class="menu-btn" id="change2">About</a></li>
                    <li><a href="{{ url('menu') }}" class="menu-btn" id="change3">Menu</a></li>
                    <li><a href="{{ url('location') }}" class="menu-btn" id="change4">Location</a></li>
                    <li><a href="{{ url('order') }}" class="menu-btn" id="change5">Order</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="about" id="about">
        <div class="max-width">
            <div class="about-content">
                <div class="column left">
                    <img src="{{ asset('assets/images/orenn.jpg') }}" alt="Mie Ayam">
                </div>
                <div class="column right">
                    <h1>Hello Dear</h1>
                    <div class="text-underline"></div>
                    <p>
                        Rumah Makan Pondok Orange didirikan sejak tahun 2008, dedikasi untuk memperkenalkan makanan khas sambas ke seluruh penjuru. Melayani Makan ditempat dan bawa pulang. Pendirinya Pondok Orange ini bernama Bapak Sugino dan Ibu Subir, sepasang suami istri yang berkerja sama dari nol sampai bisa sesukses sekarang. Mereka adalah seorang pengusaha yang telah menjalani perjalanan kuliner mereka yang kuat. Mereka membawa pengetahuan mereka dan menyajikan makanan yang khas dengan menggunakan bahan sayur dan rempah pilihan yang autentik, dibuat dengan perhatian penuh terhadap kualitas dan cita rasa, memastikan setiap pelanggan mendapatkan pengalaman kuliner yang tak terlupakan. Mempunyai cukup banyak karyawan yang setiap minggunya bergantian shift kerja. Pondok Orange beroperasi dari hari Senin-Sabtu buka pukul 06.00 WIB dan tutup jam 21.00 WIB
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="sd" id="sd">
        <div class="max-width">
            <div class="sd-content">
                <div class="column">
                    <div class="sd-background">
                        <h1 class="sd-title">Delicious Recipes</h1>
                        <h1>Menu Khas</h1>
                        <br><br>
                        <div class="sd-row">
                            <table style="width: 500px;">
                                <tr>
                                    <td style="width: 100px;">
                                        <a href="#" class="sd-image">
                                            <img src="{{ asset('assets/images/Bubur_pedas.JPEG') }}" alt="Bubur Pedas">
                                        </a>
                                    </td>
                                    <td style="width: 250px;">
                                        <div class="sd-box">
                                            <div class="sd-text-1">Bubur Pedas</div>
                                            <div class="sd-text-underline"></div>
                                            <div class="sd-text-2">Menu khas dengan rasa autentik.</div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <table style="width: 500px;">
                                <tr>
                                    <td style="width: 100px;">
                                        <a href="#" class="sd-image">
                                            <img src="{{ asset('assets/images/Mie_sagu_rebus.JPEG') }}" alt="Mie Sagu Rebus">
                                        </a>
                                    </td>
                                    <td style="width: 250px;">
                                        <div class="sd-box">
                                            <div class="sd-text-1">Mie Sagu Rebus</div>
                                            <div class="sd-text-underline"></div>
                                            <div class="sd-text-2">Menu khas kedua dengan rasa yang ringan.</div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <footer>
        <span><span class="fa fa-copyright"></span> <b>Copyright</b> <span class="name-fill">Pondok Orange.</span> | 2024 All Rights Reserved.
            <br>
            Made By <span class="name-fill">Gina Ananta Novi D. P.</span></span>
    </footer>

</body>

</html>