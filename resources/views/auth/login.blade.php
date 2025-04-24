<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="relative flex flex-col flex-1 p-[10px]">
        <div class="absolute w-[calc(100%-20px)] min-h-[calc(100vh-20px)] h-[calc(100%-20px)] bg-[#fff] -z-10 rounded-[20px]">
            <img src="{{ asset('build/assets/images/icons/background-glow.png') }}" class="absolute bottom-0 transform -translate-x-1/2 left-1/2" alt="">
        </div>
        <nav class="flex items-center justify-between p-[30px]">
            <div class="flex items-center gap-[60px]">
                <img src="{{  asset('build/assets/brand-paketinaja.png') }}" class="w-[full] h-[50px]" alt="brand">
            </div>
            <div class="flex items-center gap-3">         
                <a href="{{ route('register') }}" >
                    <div class="flex items-center gap-3 w-fit rounded-full border p-[14px_20px] transition-all duration-300 hover:bg-[#662FFF] hover:border-[#8661EE] hover:shadow-[-10px_-6px_10px_0_#7F33FF_inset] bg-[#662FFF] border-[#8661EE] shadow-[-10px_-6px_10px_0_#7F33FF_inset]">
                        <span class="font-semibold text-white">Sign Up</span>
                    </div>
                </a>
            </div>
        </nav>

        <form action="{{ route('login.post') }}" method="post" class="flex flex-col w-[400px] h-fit rounded-[20px] border border-[#262A56] p-[30px] gap-[30px] bg-[#080A2A] m-auto">
        @csrf

            <div>
                <h1 class="font-bold text-[26px] leading-[39px] text-white">Welcome Back!</h1>
                <p class="text-[#6B6C7F]">Manage your employees easily</p>
            </div>
            <hr class="border-[#262A56]">
            <div class="flex items-center gap-3 w-full rounded-full border p-[14px_20px] transition-all duration-300 focus-within:border-[#8661EE] focus-within:shadow-[-10px_-6px_10px_0_#7F33FF_inset] bg-[#070B24] border-[#24283E] shadow-[-10px_-6px_10px_0_#181A35_inset]">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-mail text-white"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" /><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" /></svg>
                <input type="email" name="email" id="email" autocomplete="off" class="border-none hover:border-none hover:outline-none appearance-none outline-none !bg-transparent w-full font-semibold text-white placeholder:font-normal placeholder:text-[#6B6C7F]" placeholder="Write your email address">
                <!-- <label for="email" class="form-label">{{ __('Email Address') }}</label> -->
            </div>
            <div>
                <div class="flex items-center gap-3 w-full rounded-full border p-[14px_20px] transition-all duration-300 focus-within:border-[#8661EE] focus-within:shadow-[-10px_-6px_10px_0_#7F33FF_inset] bg-[#070B24] border-[#24283E] shadow-[-10px_-6px_10px_0_#181A35_inset]">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-lock text-white"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 2a5 5 0 0 1 5 5v3a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3v-3a5 5 0 0 1 5 -5m0 12a2 2 0 0 0 -1.995 1.85l-.005 .15a2 2 0 1 0 2 -2m0 -10a3 3 0 0 0 -3 3v3h6v-3a3 3 0 0 0 -3 -3" /></svg>
                    <input type="password" name="password" id="password" autocomplete="off" class="border-none hover:border-none hover:outline-none form-control @error('password') is-invalid @enderror appearance-none outline-none !bg-transparent w-full font-semibold text-white placeholder:font-normal placeholder:text-[#6B6C7F]" placeholder="Type your secure password">
                    <!-- <label for="password" class="form-label">{{ __('Password') }}</label> -->
                </div>
                <div class="flex justify-end mt-[10px]">
                    <a href="{{ route('password.request') }}" class="text-sm leading-[21px] text-[#662FFF] hover:underline">Forgot Password</a>
                </div>
            </div>
            <hr class="border-[#262A56]">
            <button type="submit" class="w-full rounded-full border p-[14px_20px] text-center font-semibold text-white bg-[#662FFF] border-[#8661EE] shadow-[-10px_-6px_10px_0_#7F33FF_inset]">
                Sign In to Manage
            </button>
        </form>
    </div>

    @include('sweetalert::alert')
    @vite(['resources/js/app.js'])
</body>
</html>