<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Outgoing;
use App\Models\Category;
use Illuminate\Http\Request;

class OutgoingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Outgoing::query();
        $items = Item::all();
        $categories = Category::all();
        $outgoing = Outgoing::with(['item'])->get();

         // Filter berdasarkan nama item
        if ($request->has('namaItem') && $request->namaItem != '') {
            $query->whereHas('item', function ($q) use ($request) {
                $q->where('namaItem', 'like', '%' . $request->namaItem . '%');
            });
        }

        // Filter berdasarkan kode item
        if ($request->has('kodeItem') && $request->kodeItem != '') {
            $query->where('kodeItem', 'like', '%' . $request->kodeItem . '%');
        }

        // Filter berdasarkan kategori
        if ($request->has('category_id') && $request->category_id != '') {
            $query->where('category_id', $request->category_id);
        }

        return view('outgoing', compact('items','outgoing', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('outgoings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $outgoingItem = new Outgoing();
        $outgoingItem->namaItem = $request->input('namaItem');
        $outgoingItem->kodeItem = $request->input('kodeItem');
        $outgoingItem->priceItem = $request->input('priceItem');
        $outgoingItem->outgoingStock = $request->input('outgoingStock');
        $outgoingItem->stockItem = $request->input('stockItem');
        $outgoingItem->destination = $request->input('destination');
        $outgoingItem->dateOutItems = $request->input('dateOutItems');
        $outgoingItem->category_id = $request->input('category_id');
        $outgoingItem->item_id = $request->input('item_id');
        
        $result = $outgoingItem->save();

        if($result) {
            return redirect()->route('outgoings.index')->with('success', 'Data barang masuk berhasil disimpan!');
        }else {
            return "failed add item";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Outgoing $outgoing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Outgoing $outgoing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Outgoing $outgoing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Outgoing $outgoing)
    {
        //
    }
}
