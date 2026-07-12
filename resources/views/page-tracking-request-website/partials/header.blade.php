<!-- Top Navigation Bar -->
<header class="app-header">
    <div class="header-left">
        <a href="{{ url('/tracking-request-website') }}" class="logo">
            <i class="fa-solid fa-square-poll-vertical logo-icon"></i>
            <span>RequestTracker</span>
        </a>
    </div>
    <nav class="header-nav">
        <div class="nav-group">
            <a href="{{ url('/tracking-request-website') }}" class="nav-item {{ Request::is('tracking-request-website') || Request::is('tracking-request-website-form') ? 'active' : '' }}">
                <i class="fa-solid fa-list-ul nav-icon"></i>
                Detail
            </a>

            <a href="{{ url('/tracking-request-website-table') }}" class="nav-item {{ Request::is('tracking-request-website-table') ? 'active' : '' }}">
                <i class="fa-solid fa-table-cells-large nav-icon"></i>
                Table
            </a>
        </div>

        <a href="{{ url('/tracking-request-website-form') }}" class="nav-item btn-new-req {{ Request::is('tracking-request-website-form') ? 'active' : '' }}">
            <i class="fa-solid fa-plus icon-small"></i>
            New Request
        </a>
    </nav>
</header>
