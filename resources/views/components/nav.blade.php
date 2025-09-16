<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Logo -->
    <a class="navbar-brand ps-3" href="{{ route('home') }}">الموقع الشخصي</a>

    <!-- Sidebar Toggle -->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button>

    <!-- left side (فراغ يوزع العناصر) -->
    <div class="flex-grow-1"></div>

    <!-- Notifications -->
    <ul class="navbar-nav d-flex align-items-center">
        {{-- إشعارات الرسائل --}}
        <li class="nav-item dropdown me-3">
            <a class="nav-link position-relative" href="#" id="contactsDropdown" role="button" 
               data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-envelope fa-xl"></i>
                @php
                    $unreadCount = auth()->user()->unreadNotifications
                                    ->where('data.contact_id', '!=', null)
                                    ->count();
                @endphp
                @if($unreadCount > 0)
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                          style="font-size: 11px; padding: 4px 6px; min-width: 18px;">
                        {{ $unreadCount }}
                        <span class="visually-hidden">رسائل غير مقروءة</span>
                    </span>
                @endif
            </a>

            <ul class="dropdown-menu dropdown-menu-end shadow" 
                aria-labelledby="contactsDropdown" 
                style="width: 350px; max-height: 400px; overflow-y: auto;">
                
                <li class="dropdown-header fw-bold bg-light p-2">
                    📩 لديك {{ $unreadCount }} رسالة جديدة
                </li>
                <div class="dropdown-divider"></div>

                @forelse (auth()->user()->unreadNotifications->where('data.contact_id', '!=', null) as $notification)
                    <li>
                        <a href="{{ route('notifications.read', $notification->id) }}" 
                           class="dropdown-item p-2 @if(is_null($notification->read_at)) bg-light fw-bold @endif">
                            <div class="d-flex align-items-start">
                                <div class="me-2 position-relative">
                                    <i class="{{ $notification->data['icon'] ?? 'fa-solid fa-envelope' }} text-primary fa-lg"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="mb-1">
                                        {{ $notification->data['message'] ?? 'رسالة جديدة' }}
                                    </div>
                                    <small class="text-muted">
                                        {{ $notification->created_at->diffForHumans() }}
                                    </small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <div class="dropdown-divider"></div>
                @empty
                    <li class="p-2 text-center text-muted">لا توجد رسائل جديدة</li>
                @endforelse

                <li>
                    <a class="dropdown-item text-center text-primary fw-bold" 
                       href="{{ route('dashboard.contacts.index') }}">
                        عرض كل الرسائل
                    </a>
                </li>
            </ul>
        </li>

        <!-- User Dropdown -->
        <li class="nav-item dropdown mx-2">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" data-bs-toggle="dropdown">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#!">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
