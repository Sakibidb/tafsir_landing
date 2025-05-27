<aside class="db-sidebar">
    <div class="db-sidebar-header">
        <a href="{{ route('home') }}" class="w-24"><img src="{{ asset('images/logo/fav-logo.png') }}" alt="logo"></a>
        <button class="fa-solid fa-xmark xmark-btn"></button>
    </div>
    <nav class="db-sidebar-nav">
        <h5 class="db-sidebar-nav-title">Scientific Tafsir</h5>
        <ul class="db-sidebar-nav-list">
            <li class="db-sidebar-nav-item">
                <a href="{{ route('admin') }}" class="db-sidebar-nav-menu">
                    <i class="fa-solid fa-box-open text-sm"></i>
                    <span class="text-base flex-auto">dashboard</span>
                </a>
            </li>
            <li class="db-sidebar-nav-item">
                <a href="{{ route('leads.index') }}" class="db-sidebar-nav-menu">
                    <i class="fa-solid fa-table"></i>
                    <span>Leads</span>
                </a>
            </li>
            <li class="db-sidebar-nav-item">
                <a href="{{ route('contacts.index') }}" class="db-sidebar-nav-menu">
                    <i class="fa-solid fa-table"></i>
                    <span>Contacts</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
