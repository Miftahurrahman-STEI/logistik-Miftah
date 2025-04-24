<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\DB;
use App\Models\Ingoing;
use App\Models\Outgoing;

class OverviewController extends Controller
{
    public function index()
    {
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

        $ingoings = Ingoing::with('item')->latest()->get();    // semua data barang masuk
        $outgoings = Outgoing::with('item')->latest()->get();  // semua data barang keluar
    
        return view('overview', [
            'ingoings' => $ingoings,
            'outgoings' => $outgoings,
            'countIngoings' => $ingoings->count(),
            'countOutgoings' => $outgoings->count(),
        ]);
    }
}