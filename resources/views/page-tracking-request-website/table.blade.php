@extends('app')

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
@endpush

@section('content')
    <div class="dashboard-layout">
        @include('page-tracking-request-website.partials.header')

        <div class="dashboard-body">
            <!-- Main Workspace -->
            <main class="table-page">
                <div class="table-page-inner">
                    <div class="table-toolbar">
                        <div class="table-toolbar-left">
                            <div class="table-search-container search-input-container">
                                <i class="fa-solid fa-magnifying-glass search-icon"></i>
                                <input type="text" class="search-input" placeholder="Search requests...">
                            </div>
                            <div class="table-filter-pills">
                                <span class="filter-pill active">All</span>
                                <span class="filter-pill">Pending</span>
                                <span class="filter-pill">In Progress</span>
                                <span class="filter-pill">Completed</span>
                                <span class="filter-pill">On Hold</span>
                                <span class="filter-pill">Cancelled</span>
                            </div>
                        </div>
                        <span class="results-count" id="resultsCount">0 requests</span>
                    </div>
                    <div class="table-container">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th data-sort="id">ID <i class="fa-solid fa-arrows-up-down sort-icon"></i></th>
                                    <th data-sort="date">DATE <i class="fa-solid fa-chevron-down sort-icon active"></i></th>
                                    <th>REQ. IN DATE</th>
                                    <th>TYPE</th>
                                    <th>METHOD</th>
                                    <th>PRODUCT / PROMO PAGE</th>
                                    <th data-sort="requestor">REQUESTOR <i class="fa-solid fa-arrows-up-down sort-icon"></i>
                                    </th>
                                    <th>DEPT. OWNER</th>
                                    <th>PIC</th>
                                    <th>CAMPAIGN TYPE</th>
                                    <th>DUE DATE</th>
                                    <th>STATUS</th>
                                    <th>COMPLETE DATE</th>
                                    <th>URL</th>
                                    <th class="text-center">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody id="requestTableBody">
                                <!-- Baris tabel di-render otomatis oleh list.js dari data di localStorage -->
                                <tr>
                                    <td colspan="15" class="text-center text-muted">Loading requests...</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('assets/page-tracking-request-website/js/utils.js') }}"></script>
    <script src="{{ asset('assets/page-tracking-request-website/js/db.js') }}"></script>
    <script>
        window.APP_URLS = {
            list: "{{ url('/tracking-request-website-table') }}",
            form: "{{ url('/tracking-request-website-form') }}",
            detail: "{{ url('/tracking-request-website') }}",
        };
    </script>
    <script src="{{ asset('assets/page-tracking-request-website/js/list.js') }}"></script>
@endpush
