<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu; // Assuming you have a Menu model to fetch menu data

class DataController extends Controller
{
    // Display the menu data
    public function menu()
    {
        $menus = Menu::all(); // Fetch all menu data from the database (adjust the model as needed)
        return view('data.menu', compact('menus'));
    }

    // // Display the bahan data
    // public function bahan()
    // {
    //     // Example: Fetch bahan data
    //     $bahans = Bahan::all(); // Replace with actual model for bahan
    //     return view('data.bahan', compact('bahans'));
    // }

    // // Display the pemasok data
    // public function pemasok()
    // {
    //     $pemasoks = Pemasok::all(); // Replace with actual model for pemasok
    //     return view('data.pemasok', compact('pemasoks'));
    // }

    // // Display the karyawan data
    // public function karyawan()
    // {
    //     $karyawans = Karyawan::all(); // Replace with actual model for karyawan
    //     return view('data.karyawan', compact('karyawans'));
    // }

    // // Display the inventaris data
    // public function inventaris()
    // {
    //     $inventaris = Inventaris::all(); // Replace with actual model for inventaris
    //     return view('data.inventaris', compact('inventaris'));
    // }

    // // Display the penjualan data
    // public function penjualan()
    // {
    //     $penjualans = Penjualan::all(); // Replace with actual model for penjualan
    //     return view('data.penjualan', compact('penjualans'));
    // }
}
