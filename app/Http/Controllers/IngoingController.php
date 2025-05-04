<?php

namespace App\Http\Controllers;

use App\Models\Ingoing;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

use Illuminate\Http\RedirectResponse;

class IngoingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Ingoing::query();

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

        $perPage = 10;
        $currentPage = $request->query('page', 1); // default halaman 1
        $offset = ($currentPage - 1) * $perPage;

        $total = $query->count(); // Dihitung dari query yang sudah difilter
        $ingoing = $query->orderBy('created_at', 'desc')
                    ->offset($offset)
                    ->limit($perPage)
                    ->get();

        $totalPages = ceil($total / $perPage);

        // Get all items and categories for dropdowns (not paginated)
        $items = Item::all();
        $categories = Category::all();

        // Pass everything to the view
        return view('ingoing', compact(
            'query', 
            'ingoing', 
            'currentPage', 
            'perPage', 
            'offset', 
            'total', 
            'totalPages',
            'categories',
            'items'
        ));
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
        $ingoingItem->origin = $request->input('origin');
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
    public function destroy($id): RedirectResponse
    {
        return  $item = Item::findOrFail($id);
    }
}
