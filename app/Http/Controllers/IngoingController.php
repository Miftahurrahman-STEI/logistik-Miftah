<?php

namespace App\Http\Controllers;

use App\Models\Ingoing;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class IngoingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        $categories = Category::all();
        $ingoing = Ingoing::with(['item'])->get();

        return view('ingoing', compact('items','ingoing', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ingoings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ingoingItem = new Ingoing();
        $ingoingItem->namaItem = $request->input('namaItem');
        $ingoingItem->kodeItem = $request->input('kodeItem');
        $ingoingItem->priceItem = $request->input('priceItem');
        $ingoingItem->incomingStock = $request->input('incomingStock');
        $ingoingItem->stockItem = $request->input('stockItem');
        $ingoingItem->dateInItems = $request->input('dateInItems');
        $ingoingItem->category_id = $request->input('category_id');
        $ingoingItem->item_id = $request->input('item_id');
        
        $result = $ingoingItem->save();

        if($result) {
            return "success add item";
        }else {
            return "failed add item";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingoing $ingoing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingoing $ingoing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingoing $ingoing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingoing $ingoing)
    {
        //
    }
}
