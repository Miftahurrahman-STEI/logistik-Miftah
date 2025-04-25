<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="flex min-h-screen">
        <aside class="sidebar-container fixed h-[calc(100vh-20px)] w-full max-w-[280px] my-[10px] bg-[#060A23] overflow-hidden flex flex-1">
            <div class="scroll-container flex w-full overflow-y-scroll hide-scrollbar">
                <nav class="flex flex-col w-full h-fit p-[30px] gap-10 z-10">
                    <div class="w-[150px]">
                        <img src="{{ asset('build/assets/brand-logistinc.png') }}" alt="logo">
                    </div>
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
                            <a href="{{ route('ingoings.index') }}" >
                                <div class="flex items-center gap-3 w-full rounded-full border p-[14px_20px] transition-all duration-300 hover:bg-[#662FFF] hover:border-[#8661EE] hover:shadow-[-10px_-6px_10px_0_#7F33FF_inset] bg-[#070B24] border-[#24283E] shadow-[-10px_-6px_10px_0_#181A35_inset]
                                
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
                                    Admin
                                @else
                                    Visitor
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
                    <h1 class="font-extrabold text-[28px] leading-[42px]">Dashboard</h1>
                    <p class="text-[#838C9D] mt-[1]">Dashboard monitoring</p>
                </div>
            </header>
            
            <div class="flex flex-col">
                <div class="flex justify-start items-start gap-4">
                    <div class="card w-[300px] h-[110px] p-4 bg-primary rounded-2xl text-start">
                        <div class="flex justify-center items-center gap-4 text-white">
                            <div class="rounded-full bg-green-100 w-[60px] h-[60px] text-center flex justify-center items-center">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="40"  height="40"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trending-up text-trendingUp"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                            </div>
                            <div class="flex flex-col justify-center items-start">
                                <h2 class="text-[15px] font-medium">
                                    TOTAL BARANG MASUK
                                </h2>
                                <p class="text-[40px] font-bold text-white text-start">
                                    {{ $totalIngoing }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card w-[300px] h-[110px] p-4 bg-primary rounded-2xl text-start">
                        <div class="flex justify-center items-center gap-4 text-white">
                            <div class="rounded-full bg-red-100 w-[60px] h-[60px] text-center flex justify-center items-center">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="40"  height="40"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trending-down text-trendindDown"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7l6 6l4 -4l8 8" /><path d="M21 10l0 7l-7 0" /></svg>
                            </div>
                            <div class="flex flex-col justify-center items-start">
                                <h2 class="text-[15px] font-medium">
                                    TOTAL BARANG KELUAR
                                </h2>
                                <p class="text-[40px] font-bold text-white text-start">
                                    {{ $totalOutgoing }}
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </main>
    </div>

    @include('sweetalert::alert')
    @vite(['resources/js/navbar.js'])
    @vite(['resources/js/confirm-delete.js'])
</body>
</html>