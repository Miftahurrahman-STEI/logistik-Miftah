<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Ingoing;
use App\Models\Outgoing;

class DashboardController extends Controller
{
    public function index() {
        $data = [
            'jmlKategori' => Category::count(),
            'jmlBarangMasuk' => Ingoing::count(),
            'jmlBarangKeluar' => Outgoing::count(),
        ];

        $incomingItems = Ingoing::with('item')->latest()->get();
        $outgoingItems = Outgoing::with('item')->latest()->get();

         // Hitung total stock masuk dan keluar
        $totalIngoing = Ingoing::sum('incomingStock');
        $totalOutgoing = Outgoing::sum('outgoingStock');

        return view('dashboard', compact('incomingItems', 'outgoingItems', 'data', 'totalIngoing', 'totalOutgoing'));
    }
}
