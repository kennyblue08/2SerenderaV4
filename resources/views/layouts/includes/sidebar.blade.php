{{-- <div class="wrapper"> --}}
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <div class="logo">
            <a class="sidebar-brand" href="index.html">
                <img src="{{ asset('assets/images/skyward3.png') }}"
                    style="height: 100%; width: 100%; object-fit: contain;" alt="skyward" />
            </a>

        </div>


        <ul class="sidebar-nav">

            <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="sidebar-link d-flex align-items-center gap-2" href="{{ route('dashboard') }}">
                    <span class="material-symbols-outlined">
                        dashboard
                    </span>
                    <div class="align-middle">Dashboard</div>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('schedule') ? 'active' : '' }} ">
                <a class="sidebar-link d-flex align-items-center gap-2" href="{{ route('schedule') }}">
                    <span class="material-symbols-outlined">
                        edit_calendar
                    </span>
                    <div class="align-middle">Schedule</div>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link d-flex align-items-center gap-2" href="pages-profile.html">
                    <span class="material-symbols-outlined">
                        history
                    </span>
                    <div class="align-middle">History</div>
                </a>
            </li>

            <li class="sidebar-item" style="margin: 200px 0 0 0">
                <a class="sidebar-link d-flex align-items-center gap-2" href="pages-profile.html">
                    <span class="material-symbols-outlined">
                       settings
                    </span>
                    <div class="align-middle">Settings</div>
                </a>
            </li>

        </ul>

    </div>
</nav>

{{-- <div class="main"> --}}


{{-- </div> --}}
{{-- </div> --}}
