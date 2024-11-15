<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    <style>
        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #2d3748;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            overflow-y: auto;
            padding-top: 20px;
            transition: width 0.3s ease;
            scrollbar-width: thin;
            scrollbar-color: #4a5568 #2d3748;
            /* thumb and track color */
        }

        .sidebar .logo h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            display: block;
            padding: 10px;
        }

        .sidebar ul li a:hover {
            background-color: #4a5568;
        }

        /* Dropdown Content */
        .dropdown-content {
            display: block;
            max-height: 0;
            overflow: hidden;
            list-style-type: none;
            padding: 0;
            margin: 0;
            transition: max-height 0.3s ease-in-out;
        }

        .dropdown-content li {
            padding-left: 20px;
        }

        .dropdown-content.open {
            max-height: 500px;
        }

        /* Scrollbar Styling */
        .sidebar::-webkit-scrollbar {
            width: 8px;
            /* scrollbar width */
        }

        .sidebar::-webkit-scrollbar-thumb {
            background-color: #4a5568;
            border-radius: 10px;
        }

        .sidebar::-webkit-scrollbar-track {
            background-color: #2d3748;
        }

        .sidebar::-webkit-scrollbar-corner {
            background-color: #2d3748;
        }

        /* Main content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            flex-grow: 1;
            transition: margin-left 0.3s ease;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 0;
            }
        }

        @media (max-width: 600px) {
            .sidebar {
                width: 0;
                padding-top: 0;
            }

            .sidebar.active {
                width: 250px;
            }

            .main-content {
                margin-left: 0;
            }

            .sidebar ul li a {
                font-size: 14px;
            }
        }
    </style>

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 flex">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="logo mb-6">
                <h2 class="text-xl font-bold text-center">Pondok Orange</h2>
            </div>
            <ul>
                <!-- Dashboard -->
                <li><a href="{{ route('dashboard') }}" class="text-lg">Dashboard</a></li>

                <!-- Tables and Forms Dropdown -->
                <li class="dropdown">
                    <a href="javascript:void(0)" class="text-lg dropbtn" onclick="toggleDropdown('tablesAndFormsDropdown')">Tables and Forms</a>
                    <ul id="tablesAndFormsDropdown" class="dropdown-content ml-4 space-y-2">
                        <li><a href="{{ route('data.menu') }}" class="text-lg">Data Menu Makanan</a></li>
                        <li><a href="{{ route('data.bahan') }}" class="text-lg">Data Bahan Baku</a></li>
                        <li><a href="{{ route('data.pemasok') }}" class="text-lg">Data Pemasok</a></li>
                        <li><a href="{{ route('data.karyawan') }}" class="text-lg">Data Karyawan</a></li>
                        <li><a href="{{ route('data.inventaris') }}" class="text-lg">Data Inventaris</a></li>
                        <li><a href="{{ route('data.penjualan') }}" class="text-lg">Data Penjualan</a></li>
                    </ul>
                </li>

                <!-- Forms Dropdown -->
                <li class="dropdown">
                    <a href="javascript:void(0)" class="text-lg dropbtn" onclick="toggleDropdown('formsDropdown')">Forms</a>
                    <ul id="formsDropdown" class="dropdown-content ml-4 space-y-2">
                        <li><a href="{{ route('input.menu') }}" class="text-lg">Input Menu Makanan</a></li>
                        <li><a href="{{ route('input.bahan') }}" class="text-lg">Input Bahan Baku</a></li>
                        <li><a href="{{ route('input.pemasok') }}" class="text-lg">Input Pemasok</a></li>
                        <li><a href="{{ route('input.karyawan') }}" class="text-lg">Input Karyawan</a></li>
                        <li><a href="{{ route('input.inventaris') }}" class="text-lg">Input Inventaris</a></li>
                        <li><a href="{{ route('input.penjualan') }}" class="text-lg">Input Penjualan</a></li>
                    </ul>
                </li>

                <!-- Perhitungan Dropdown -->
                <li class="dropdown">
                    <a href="javascript:void(0)" class="text-lg dropbtn" onclick="toggleDropdown('perhitunganDropdown')">Perhitungan</a>
                    <ul id="perhitunganDropdown" class="dropdown-content ml-4 space-y-2">
                        <li><a href="{{ route('perhitungan.processing') }}" class="text-lg">Processing</a></li>
                    </ul>
                </li>

                <!-- Lainnya Dropdown -->
                <li class="dropdown">
                    <a href="javascript:void(0)" class="text-lg dropbtn" onclick="toggleDropdown('lainnyaDropdown')">Lainnya</a>
                    <ul id="lainnyaDropdown" class="dropdown-content ml-4 space-y-2">
                        <li><a href="{{ route('lainnya.more') }}" class="text-lg">More</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content flex-1 ml-64">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>

    <script>
        // Function to toggle dropdown visibility with transition
        function toggleDropdown(dropdownId) {
            var dropdown = document.getElementById(dropdownId);
            dropdown.classList.toggle("open"); // Toggle the 'open' class to trigger transition
        }
    </script>
</body>

</html>