<!-- Sidebar Panel -->
<aside class="app-sidebar">
    <div class="sidebar-search">
        <div class="search-input-container">
            <i class="fa-solid fa-magnifying-glass search-icon"></i>
            <input class="search-input" type="text" name="search" id="search-input"
                placeholder="Search requests...">
        </div>
    </div>

    <div class="sidebar-filters">
        <span class="filter-pill active">All</span>
        <span class="filter-pill">Pending</span>
        <span class="filter-pill">In Progress</span>
        <span class="filter-pill">Completed</span>
        <span class="filter-pill">On Hold</span>
        <span class="filter-pill">Cancelled</span>
    </div>

    <div class="sidebar-content">
        <div class="sidebar-section-header">
            <h4 class="section-title" id="sidebarRequestsCount">5 Requests</h4>
        </div>

        <div class="request-cards-list" id="sidebarRequestsList">
            <!-- Active Card -->
            <a href="{{ url('/tracking-request-website') }}" class="request-card {{ Request::is('tracking-request-website') ? 'active' : '' }}">
                <div class="card-header">
                    <div class="header-left">
                        <span class="req-id">REQ-001</span>
                        <span class="badge-category category-promo">Promo</span>
                    </div>
                    <i class="fa-solid fa-chevron-right chevron-icon"></i>
                </div>
                <h4 class="card-title">Summer Campaign 2026</h4>
                <div class="card-meta">
                    <span class="status-pill status-progress">
                        <i class="fa-regular fa-circle-dot status-icon"></i>
                        In Progress
                    </span>
                    <span class="date-text">
                        <i class="fa-regular fa-calendar date-icon"></i>
                        15 Jul 2026
                    </span>
                </div>
            </a>

            <!-- Secondary Card -->
            <a href="{{ url('/tracking-request-website') }}" class="request-card">
                <div class="card-header">
                    <div class="header-left">
                        <span class="req-id">REQ-002</span>
                        <span class="badge-category category-article">Article</span>
                    </div>
                    <i class="fa-solid fa-chevron-right chevron-icon"></i>
                </div>
                <h4 class="card-title">Product Feature Article – KPR Syariah</h4>
                <div class="card-meta">
                    <span class="status-pill status-completed">
                        <i class="fa-regular fa-circle-check status-icon"></i>
                        Completed
                    </span>
                    <span class="date-text">
                        <i class="fa-regular fa-calendar date-icon"></i>
                        10 Jul 2026
                    </span>
                </div>
            </a>
        </div>
    </div>
</aside>
