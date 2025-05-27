<div class="backdrop"></div>
<header class="db-header">
    <a href="{{ route('home') }}" class="w-32 flex-shrink-0"><img class="w-full" src="{{ asset('images/logo/logo for website.png') }}"
            alt="logo"></a>
    <div class="flex items-center justify-end w-full gap-4">

        <button class="fa-solid fa-align-left db-header-nav w-9 h-9 rounded-lg text-primary bg-primary/5"></button>

        <button data-account="#profile" class="flex items-center gap-2">
            <img class="flex-shrink-0 object-cover rounded-lg w-9 h-9" src="{{ auth()->user()->images }}"
                alt="avatar">
            <h3 class="whitespace-nowrap text-sm capitalize text-left leading-[17px]"> <b
                    class="block font-semibold">{{ auth()->user()->name }}</b></h3>
            <i class="fa-solid fa-caret-down text-xs ml-1.5"></i>
        </button>
    </div>
</header>
<aside id="profile"
    class="ltr:translate-x-[105%] rtl:-translate-x-[105%] fixed top-0 ltr:right-0 rtl:left-0 z-[60] w-full max-w-sm ltr:shadow-sidebar-left rtl:shadow-sidebar-right h-screen transition-all duration-500 bg-white">
    <div class="py-5 mx-auto text-center w-fit">
        <button
            class="fa-solid fa-xmark absolute top-4 ltr:right-4 rtl:left-4 text-white bg-[#FB4E4E] xmark-btn"></button>
        <figure
            class="relative z-10 w-[98px] h-[98px] border-2 border-dashed rounded-full inline-flex items-center justify-center border-white bg-gradient-to-t from-[#FF7A00] to-[#FF016C]
        before:absolute before:top-1/2 before:left-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-24 before:h-24 before:rounded-full before:-z-10 before:bg-white">
            <img class="w-[90px] h-[90px] rounded-full shadow-avatar" src="{{ auth()->user()->images }}" alt="avatar">
        </figure>
        <h3 class="font-medium text-sm leading-6 capitalize mb-0.5">{{ auth()->user()->name }}</h3>
        <p class="text-xs mb-0.5">{{ auth()->user()->email }}</p>
        <p class="text-xs">{{ auth()->user()->phone }}</p>
    </div>
    <nav class="px-4 h-[calc(100vh_-_225px)] overflow-y-auto thin-scrolling">        
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();"
            class="paper-link transition w-full flex items-center gap-3.5 py-2.5 border-b last:border-none border-[#EFF0F6]">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.93333 5.04016C6.14 2.64016 7.37333 1.66016 10.0733 1.66016H10.16C13.14 1.66016 14.3333 2.85349 14.3333 5.83349V10.1802C14.3333 13.1602 13.14 14.3535 10.16 14.3535H10.0733C7.39333 14.3535 6.16 13.3868 5.94 11.0268"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M10 8H2.41333" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3.90001 5.7666L1.66667 7.99994L3.90001 10.2333" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <span class="text-sm leading-6 capitalize">Log Out</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="display-none">
            @csrf
        </form>
    </nav>
</aside>
