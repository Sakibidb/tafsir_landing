<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <!-- REQUIRED -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FAVICON -->
    <link rel="icon" href="../../images/favicon.png">


    <link rel="stylesheet" href="{{ asset('backend/fonts/icomoon/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/fonts/lineicons/lineicons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/fonts/fontawesome/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/fonts/typography/public/public.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/fonts/typography/rubik/rubik.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/lib/swiper/bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">

    <script defer src="{{ asset('backend/lib/jquery-v3.2.1.min.js') }}"></script>
    <script defer src="{{ asset('backend/lib/swiper/bundle.min.js') }}"></script>
    <script defer src="{{ asset('backend/lib/swiper/initialize.js') }}"></script>
    <script defer src="{{ asset('backend/js/dropdown.js') }}"></script>
    <script defer src="{{ asset('backend/js/drawer.js') }}"></script>
    <script defer src="{{ asset('backend/js/modal.js') }}"></script>
    <script defer src="{{ asset('backend/js/tabs.js') }}"></script>
    <script defer src="{{ asset('backend/js/script.js') }}"></script>

    <title>tafsir_landing :: Login</title>
</head>

<body>
    {{-- <div class="preloader bg-primary/95">
        <div class="loader"></div>
    </div> --}}


    <section class="flex items-center justify-center bg-cover bg-no-repeat bg-center py-16" style="background-image: url('{{ asset('images/background/emailbg.png') }}'); min-height: 100dvh;">
        <div class="w-full max-w-md bg-white bg-opacity-90 backdrop-blur-md p-8 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Welcome Back!</h2>
            <p class="text-center text-gray-600 mb-8">Please fill your email and password to sign in.</p>
    
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <div class="mb-5">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        class="w-full h-12 px-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black @error('email') border-red-500 @enderror">
                    @error('email')
                        <span class="text-sm text-red-600 mt-1 block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
    
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="w-full h-12 px-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black @error('password') border-red-500 @enderror">
                    @error('password')
                        <span class="text-sm text-red-600 mt-1 block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
    
                <button class="w-full h-12 text-center capitalize font-medium rounded-3xl mb-6 text-white" style="background:black;"
                    type="submit">{{ __('Login') }}</button>
    
                @if (Route::has('password.request'))
                    <div class="text-center mt-4">
                        <a class="text-sm text-gray-600 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </section>
    

</body>

</html>