@extends('app')

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
@endpush

@section('content')
    <div class="dashboard-layout">
        @include('page-tracking-request-website.partials.header')

        <div class="dashboard-body">
            @include('page-tracking-request-website.partials.sidebar')

            <!-- Main Workspace -->
            <main class="app-content">
                <div class="content-container">
                    <div class="content-header">
                        <div class="header-main-info">
                            <div class="meta-badges">
                                <span class="meta-req">REQ-000</span>
                                <span class="badge-promo">-</span>
                                <span class="badge-progress">
                                    <i class="fa-solid fa-spinner fa-spin icon-small"></i>
                                    Loading
                                </span>
                            </div>
                            <h1 class="main-title">Loading request...</h1>
                        </div>

                        <div class="header-actions">
                            <a href="{{ url('/tracking-request-website-form') }}" class="btn btn-edit">
                                <i class="fa-solid fa-pen-to-square icon-small"></i>
                                edit
                            </a>
                            <button type="button" class="btn btn-delete">
                                <i class="fa-solid fa-trash-can icon-small"></i>
                                delete
                            </button>
                        </div>
                    </div>

                    <div class="details-grid">
                        <!-- Dates Card -->
                        <div class="info-card">
                            <h3 class="card-section-title">DATES</h3>
                            <div class="card-grid-2x2">
                                <div class="info-group">
                                    <label>DATE</label>
                                    <p>—</p>
                                </div>
                                <div class="info-group">
                                    <label>REQUEST IN DATE</label>
                                    <p>—</p>
                                </div>
                                <div class="info-group">
                                    <label>DUE DATE</label>
                                    <p>—</p>
                                </div>
                                <div class="info-group">
                                    <label>COMPLETE DATE</label>
                                    <p class="empty-dash">—</p>
                                </div>
                            </div>
                        </div>

                        <!-- Request Info Card -->
                        <div class="info-card">
                            <h3 class="card-section-title">REQUEST INFO</h3>
                            <div class="card-grid-2x2">
                                <div class="info-group">
                                    <label>METHOD</label>
                                    <p>—</p>
                                </div>
                                <div class="info-group">
                                    <label>CAMPAIGN TYPE</label>
                                    <p>—</p>
                                </div>
                                <div class="info-group span-two-columns">
                                    <label>PRODUCT / PROMO PAGE</label>
                                    <p>—</p>
                                </div>
                            </div>
                        </div>

                        <!-- People Card -->
                        <div class="info-card">
                            <h3 class="card-section-title">PEOPLE</h3>
                            <div class="card-grid-3col">
                                <div class="info-group">
                                    <label>REQUESTOR</label>
                                    <p>—</p>
                                </div>
                                <div class="info-group">
                                    <label>DEPARTMENT OWNER</label>
                                    <p>—</p>
                                </div>
                                <div class="info-group">
                                    <label>PIC</label>
                                    <p>—</p>
                                </div>
                            </div>
                        </div>

                        <!-- Notes Card -->
                        <div class="info-card">
                            <h3 class="card-section-title">NOTES</h3>
                            <div class="notes-content">
                                <p>—</p>
                            </div>
                        </div>

                        <!-- URL Card -->
                        <div class="info-card span-full-width">
                            <h3 class="card-section-title">URL</h3>
                            <div class="url-content">
                                <p class="empty-dash">—</p>
                            </div>
                        </div>
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
    <script src="{{ asset('assets/page-tracking-request-website/js/detail.js') }}"></script>
@endpush
