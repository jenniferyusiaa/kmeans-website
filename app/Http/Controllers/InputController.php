<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class InputController extends Controller
{
    // Example method for /input/menu
    // Method to display the menu input form
    public function menu()
    {
        return view('input.menu');
    }

    // Method to handle form submission
    public function submitMenu(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'kode_makanan' => 'required|string|max:255',
            'nama_makanan' => 'required|string|max:255',
            'rincian' => 'required|string',
            'harga' => 'required|numeric',
        ]);

        // Create a new menu item
        Menu::create([
            'kode_makanan' => $request->kode_makanan,
            'nama_makanan' => $request->nama_makanan,
            'rincian' => $request->rincian,
            'harga' => $request->harga,
        ]);

        // Optionally, redirect with a success message
        return redirect()->route('input.menu')->with('success', 'Menu item successfully added!');
    }

    // Other methods for your routes (optional)
    public function bahan()
    {
        return view('input.bahan');
    }

    public function pemasok()
    {
        return view('input.pemasok');
    }

    public function karyawan()
    {
        return view('input.karyawan');
    }

    public function inventaris()
    {
        return view('input.inventaris');
    }

    public function penjualan()
    {
        return view('input.penjualan');
    }
}
