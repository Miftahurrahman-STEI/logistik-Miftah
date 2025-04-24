<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingoing;
use App\Models\Outgoing;

class DashboardController extends Controller
{
    public function index() {
        $incomingItems = Ingoing::with('item')->latest()->get();
        $outgoingItems = Outgoing::with('item')->latest()->get();

        return view('dashboard', compact('incomingItems', 'outgoingItems'));
    }
}
