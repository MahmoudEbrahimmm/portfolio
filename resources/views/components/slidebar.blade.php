<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">{{Auth::user()->name ?? 'Admin name'}}</div>
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    لوحة التحكم
                </a>
                <a class="nav-link" href="{{route('dashboard.users.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                    المستخدمين
                </a>
                <a class="nav-link" href="{{route('dashboard.projects.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-list-check"></i></div>
                    المشاريع
                </a>
                <a class="nav-link" href="{{route('dashboard.tools.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-trowel-bricks"></i></div>
                    المهارات
                </a>
                <a class="nav-link" href="{{route('dashboard.contacts.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-message"></i></div>
                    الرسائل
                </a>
                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{Auth::user()->name ?? 'Admin name'}}
        </div>
    </nav>
</div>
