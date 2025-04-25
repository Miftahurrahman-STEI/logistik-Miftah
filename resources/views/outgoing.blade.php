<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Ingoing Item</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="flex min-h-screen">
        <aside class="sidebar-container fixed h-[calc(100vh-20px)] w-full max-w-[280px] my-[10px] bg-[#060A23] overflow-hidden flex flex-1">
            <div class="scroll-container flex w-full overflow-y-scroll hide-scrollbar">
                <nav class="flex flex-col w-full h-fit p-[30px] gap-10 z-10">
                    <a href="">
                        <assset src="{{ asset('build/assets/images/logos/logo.svg') }}" alt="logo">
                    </a>
                    <ul class="flex flex-col gap-4">
                        <p class="font-semibold text-xs leading-[18px] text-white">GENERAL</p>
                        <li>
                            <a href="{{ route('overview') }}" >
                                <div class="flex items-center gap-3 w-full rounded-full border p-[14px_20px] transition-all duration-300 hover:bg-[#662FFF] hover:border-[#8661EE] hover:shadow-[-10px_-6px_10px_0_#7F33FF_inset] bg-[#070B24] border-[#24283E] shadow-[-10px_-6px_10px_0_#181A35_inset]">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-article text-white"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M7 8h10" /><path d="M7 12h10" /><path d="M7 16h10" /></svg>
                                    <span class="font-semibold text-white">Overview</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            @php
                                $isIngoingActive = request()->routeIs('ingoings.*');
                            @endphp

                            <a href="{{ route('ingoings.index') }}" >
                                <div class="flex items-center gap-3 w-full rounded-full border p-[14px_20px] transition-all duration-300
                                
                                {{ $isIngoingActive 
                                    ? 'bg-[#662FFF] border-[#8661EE] shadow-[-10px_-6px_10px_0_#7F33FF_inset]'
                                    : 'bg-[#070B24] border-[#24283E] shadow-[-10px_-6px_10px_0_#181A35_inset] hover:bg-[#662FFF] hover:border-[#8661EE] hover:shadow-[-10px_-6px_10px_0_#7F33FF_inset]' }} }}
                                ">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-indent-increase text-white"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 6l-11 0" /><path d="M20 12l-7 0" /><path d="M20 18l-11 0" /><path d="M4 8l4 4l-4 4" /></svg>
                                    <span class="font-semibold text-white">Ingoing Item</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('outgoings.index') }}" >
                                <div class="flex items-center gap-3 w-full rounded-full border p-[14px_20px] transition-all duration-300 hover:bg-[#662FFF] hover:border-[#8661EE] hover:shadow-[-10px_-6px_10px_0_#7F33FF_inset] bg-[#070B24] border-[#24283E] shadow-[-10px_-6px_10px_0_#181A35_inset]">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-indent-decrease text-white"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 6l-7 0" /><path d="M20 12l-9 0" /><path d="M20 18l-7 0" /><path d="M8 8l-4 4l4 4" /></svg>
                                    <span class="font-semibold text-white">Outgoing Item</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('category') }}">
                                <div class="flex items-center gap-3 w-full rounded-full border p-[14px_20px] transition-all duration-300 hover:bg-[#662FFF] hover:border-[#8661EE] hover:shadow-[-10px_-6px_10px_0_#7F33FF_inset] bg-[#070B24] border-[#24283E] shadow-[-10px_-6px_10px_0_#181A35_inset]">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-category text-white"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 3h-6a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1 -1v-6a1 1 0 0 0 -1 -1z" /><path d="M20 3h-6a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1 -1v-6a1 1 0 0 0 -1 -1z" /><path d="M10 13h-6a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1 -1v-6a1 1 0 0 0 -1 -1z" /><path d="M17 13a4 4 0 1 1 -3.995 4.2l-.005 -.2l.005 -.2a4 4 0 0 1 3.995 -3.8z" /></svg>
                                    <span class="font-semibold text-white">Categories</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}" >
                                <div class="flex items-center gap-3 w-full rounded-full border p-[14px_20px] transition-all duration-300 hover:bg-[#662FFF] hover:border-[#8661EE] hover:shadow-[-10px_-6px_10px_0_#7F33FF_inset] bg-[#662FFF] border-[#8661EE] shadow-[-10px_-6px_10px_0_#7F33FF_inset]">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home-2 text-white"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M10 12h4v4h-4z" /></svg>
                                    <span class="font-semibold text-white">Dashboard</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <ul class="flex flex-col gap-4">
                        <p class="font-semibold text-xs leading-[18px] text-white">OTHERS</p>
                        <li>
                            <a href="{{ route('logout') }}" >
                                <div class="flex items-center gap-3 w-full rounded-full border p-[14px_20px] transition-all duration-300 hover:bg-[#662FFF] hover:border-[#8661EE] hover:shadow-[-10px_-6px_10px_0_#7F33FF_inset] bg-[#070B24] border-[#24283E] shadow-[-10px_-6px_10px_0_#181A35_inset]">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout-2 text-white"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" /><path d="M15 12h-12l3 -3" /><path d="M6 15l-3 -3" /></svg>
                                    <span class="font-semibold text-white">Logout</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <main class="flex flex-col flex-1 gap-[30px] p-[30px] ml-[290px]">
            <div id="TopBar" class="flex items-center justify-end gap-[30px]">
                <div class="relative flex items-center justify-end gap-[14px]">
                    <div class="text-right">
                        <p class="font-semibold">{{ Auth::user()->name }}</p>
                        <p class="text-sm leading-[21px] text-[rgb(131,140,157)]">
                            @if(auth()->check())
                                @if(auth()->user()->hasRole('admin'))
                                    admin
                                @else
                                    visitor
                                @endif
                            @endif
                        </p>
                    </div>
                    <button type="button" id="profileButton" class="flex shrink-0 w-[50px] h-[50px] rounded-full overflow-hidden">
                        <img src="https://i.pinimg.com/736x/fc/72/5a/fc725ab049ebb52617d857b642a871a0.jpg" class="w-full h-full object-cover" alt="profile photos">
                    </button>
                    <div id="ProfileDropdown" class="absolute top-full hidden">
                        <ul class="flex flex-col w-[200px] rounded-[20px] border border-[#CFDBEF] p-5 gap-4 bg-white mt-4">
                            <li class="font-semibold">
                                <a href="{{ route('account.index') }}">My Account</a>
                            </li>
                            <li class="font-semibold">
                                <a href="{{ route('logout') }}">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <header class="flex items-center justify-between gap-[30px]">
                <div>
                    <h1 class="font-extrabold text-[28px] leading-[42px]">Outgoing Item</h1>
                    <p class="text-[#838C9D] mt-[1]">Keep your employee or user happy</p>
                </div>
            </header>

            <div x-data="{ showModal: false }" class="relative">
                <button 
                    @click="showModal = true" 
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700"
                >
                    + Add Barang Keluar
                </button>
            <div 
                x-show="showModal" 
                class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50"
            >
            <div @click.outside="showModal = false" class="bg-white p-6 rounded-xl w-full max-w-lg shadow-lg">
                <h2 class="text-xl font-bold mb-4">Tambah Barang Keluar</h2>

                <form method="POST" action="{{ route('outgoings.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nama Barang</label>
                        <input type="text" name="namaItem" required class="w-full border rounded p-2" />
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Kode Barang</label>
                        <input type="text" name="kodeItem" required class="w-full border rounded p-2" />
                    </div>

                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Harga</label>
                            <input type="number" name="priceItem" required class="w-full border rounded p-2" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Stok Keluar</label>
                            <input type="number" name="outgoingStock" required class="w-full border rounded p-2" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Tujuan Barang</label>
                            <input type="string" name="destination" required class="w-full border rounded p-2" />
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Total Stok</label>
                            <input type="number" name="stockItem" required class="w-full border rounded p-2" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Tanggal Keluar</label>
                            <input type="date" name="dateOutItems" required class="w-full border rounded p-2" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="category_id" class="block text-sm font-medium text-gray-700">Kategori</label>
                        <select name="category_id" class="w-full border rounded p-2">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-4">
                        <label for="item_id" class="block text-sm font-medium text-gray-700">Item</label>
                        <select name="item_id" class="w-full border rounded p-2">
                            @foreach($items as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-6 flex justify-end gap-4">
                        <button type="button" @click="showModal = false" class="px-4 py-2 rounded bg-red-600 hover:bg-red-700 text-white">Batal</button>
                        <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <h2 class="text-xl font-bold mb-4 mt-4">Barang Keluar</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-black uppercase bg-gray-100">
                            <tr>
                                <th class="px-6 py-3">Nama Barang</th>
                                <th class="px-6 py-3">Kode</th>
                                <th class="px-6 py-3">Kategori</th>
                                <th class="px-6 py-3">Jumlah Masuk</th>
                                <th class="px-6 py-3">Jumlah Sekarang</th>
                                <th class="px-6 py-3">Tujuan Barang</th>
                                <th class="px-6 py-3">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($outgoing as $in)
                                <tr class="bg-white border-b text-black">
                                    <td class="px-6 py-4">{{ $in->item->name ?? '-' }}</td>
                                    <td class="px-6 py-4">{{ $in->item->kode ?? '-' }}</td>
                                    <td class="px-6 py-4">{{ $in->item->kategori ?? '-' }}</td>
                                    <td class="px-6 py-4">{{ $in->outgoingStock }}</td>
                                    <td class="px-6 py-4">{{ $in->stockItem }}</td>
                                    <td class="px-6 py-4">{{ $in->destination }}</td>
                                    <td class="px-6 py-4">{{ \Carbon\Carbon::parse($in->dateOutItems)->format('d M Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

</div>



        </main>
    </div>

    @include('sweetalert::alert')
    @vite(['resources/js/navbar.js'])
    @vite(['resources/js/confirm-delete.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    @if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: 'Sukses!',
                text: '{{ session("success") }}',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Oke'
            });
        });
    </script>
    @endif

</body>
</html>