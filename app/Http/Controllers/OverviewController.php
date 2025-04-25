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

       // Gunakan hasil query yang sudah difilter
        $ingoings = $queryIn->latest()->get();
        $outgoings = $queryOut->latest()->get();

    
        return view('overview', [
            'ingoings' => $ingoings,
            'outgoings' => $outgoings,
            'countIngoings' => $ingoings->count(),
            'countOutgoings' => $outgoings->count(),
        ]);
    }
}