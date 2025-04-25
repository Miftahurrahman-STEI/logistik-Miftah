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
    public function index(Request $request)
    {
        $query = Ingoing::query();
        $items = Item::all();
        $categories = Category::all();
        $ingoing = Ingoing::with(['item'])->get();

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
            return redirect()->route('ingoings.index')->with('success', 'Data barang masuk berhasil disimpan!');
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
