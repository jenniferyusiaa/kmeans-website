<div class="sidebar">
    <div class="logo">
        <h2>Pondok Orange</h2>
    </div>
    <ul>
        <!-- Dashboard -->
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>

        <!-- Tables and Forms Dropdown -->
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn" onclick="toggleDropdown('tablesAndFormsDropdown')">Tables and Forms</a>
            <ul id="tablesAndFormsDropdown" class="dropdown-content">
                <li><a href="{{ route('data.menu') }}">Data Menu</a></li>
                <li><a href="{{ route('data.toko') }}">Data Toko</a></li>
                <li><a href="{{ route('data.penjualan') }}">Data Penjualan</a></li>
            </ul>
        </li>

        <!-- Forms Dropdown -->
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn" onclick="toggleDropdown('formsDropdown')">Forms</a>
            <ul id="formsDropdown" class="dropdown-content">
                <li><a href="{{ route('input.menu') }}">Input Menu</a></li>
                <li><a href="{{ route('input.toko') }}">Input Toko</a></li>
                <li><a href="{{ route('input.penjualan') }}">Input Penjualan</a></li>
            </ul>
        </li>

        <!-- Perhitungan Dropdown -->
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn" onclick="toggleDropdown('perhitunganDropdown')">Perhitungan</a>
            <ul id="perhitunganDropdown" class="dropdown-content">
                <li><a href="{{ route('perhitungan.processing') }}">Processing</a></li>
            </ul>
        </li>

        <!-- Lainnya Dropdown -->
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn" onclick="toggleDropdown('lainnyaDropdown')">Lainnya</a>
            <ul id="lainnyaDropdown" class="dropdown-content">
                <li><a href="{{ route('lainnya.more') }}">More</a></li>
            </ul>
        </li>
    </ul>
</div>

<style>
    .sidebar {
        width: 250px;
        background-color: #f8fafc;
        padding: 20px;
        position: fixed;
        height: 100%;
    }

    .sidebar .logo h2 {
        margin-bottom: 20px;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }

    .sidebar ul li {
        margin: 10px 0;
    }

    .sidebar ul li a {
        text-decoration: none;
        color: #333;
        font-size: 18px;
        display: block;
        padding: 10px;
    }

    .sidebar ul li a:hover {
        color: #007bff;
        background-color: #e6f0ff;
    }

    /* Dropdown styles */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropbtn {
        font-size: 18px;
        color: #333;
        background-color: #f8fafc;
        padding: 10px;
        display: block;
        width: 100%;
        text-align: left;
        border: none;
        cursor: pointer;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f8fafc;
        min-width: 200px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content li {
        padding: 8px 16px;
    }

    .dropdown-content li a {
        font-size: 16px;
        color: #333;
    }

    .dropdown-content li a:hover {
        color: #007bff;
    }
</style>

<script>
    function toggleDropdown(dropdownId) {
        // Get the dropdown element by id
        var dropdown = document.getElementById(dropdownId);

        // Toggle the display of the dropdown
        if (dropdown.style.display === "block") {
            dropdown.style.display = "none";
        } else {
            dropdown.style.display = "block";
        }
    }
</script>