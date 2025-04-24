<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use Carbon\Carbon;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'name' => 'Lampu LED',
            'kode' => 'LED123',
            'stock' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Item::create([
            'name' => 'Kabel Roll',
            'kode' => 'KBL456',
            'stock' => 50,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Item::create([
            'name' => 'Saklar Otomatis',
            'kode' => 'SKL789',
            'stock' => 200,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
