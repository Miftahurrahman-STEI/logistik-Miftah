<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Ingoing;
use App\Models\Outgoing;

class DashboardController extends Controller
{
    public function index() {
        $incomingItems = Ingoing::with('item')->latest()->get();
        $outgoingItems = Outgoing::with('item')->latest()->get();
        $queryIn =  Ingoing::with('item', 'category');
        $queryOut = Outgoing::with('item', 'category');

        if(request('tanggal')) {
            $queryIn->whereDate('dateInItems', request('tanggal'));
            $queryOut->whereDate('dateOutItems', request('tanggal'));
        }

        if(request('kategori')) {
            $queryIn->where('category_id', request('kategori'));
            $queryOut->where('category_id', request('kategori'));
        }

       // Gunakan hasil query yang sudah difilter
        $ingoings = $queryIn->latest()->get();
        $outgoings = $queryOut->latest()->get();

         // Hitung total stock masuk dan keluar
        $totalIngoing = Ingoing::sum('incomingStock');
        $totalOutgoing = Outgoing::sum('outgoingStock');

        return view('dashboard', [
                'incomingItems' => $incomingItems, 
                'outgoingItems' => $outgoingItems, 
                'totalIngoing' => $totalIngoing, 
                'totalOutgoing' => $totalOutgoing,
                'ingoings' => $ingoings,
                'outgoings' => $outgoings,
                'countIngoings' => $ingoings->count(),
                'countOutgoings' => $outgoings->count(),
            ]
        );
    }
}
