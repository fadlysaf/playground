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
                    <div class="form-workspace-container">

                        <div class="form-header">
                            <h2 class="form-main-title">New Request</h2>
                            <a href="{{ url('/tracking-request-website') }}" class="btn-close-form">
                                <i class="fa-solid fa-xmark"></i>
                            </a>
                        </div>

                        <form action="#" method="POST" class="request-form-box">

                            <div class="form-row row-2-col">
                                <div class="form-field-group">
                                    <label class="field-label required">DATE</label>
                                    <input type="date" name="date" class="form-input-field">
                                </div>
                                <div class="form-field-group">
                                    <label class="field-label">REQUEST IN DATE</label>
                                    <input type="date" name="reqInDate" class="form-input-field"
                                        placeholder="dd/mm/yyyy">
                                </div>
                            </div>

                            <div class="form-row row-2-col">
                                <div class="form-field-group">
                                    <label class="field-label required">REQUEST TYPE</label>
                                    <div class="select-wrapper">
                                        <select name="type" class="form-input-field">
                                            <option value="">Select type...</option>
                                            <option value="Promo">Promo</option>
                                            <option value="Article">Article</option>
                                            <option value="Banner / PDF">Banner / PDF</option>
                                            <option value="ONT Report">ONT Report</option>
                                            <option value="FAQ">FAQ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-field-group">
                                    <label class="field-label required">METHOD</label>
                                    <div class="select-wrapper">
                                        <select name="method" class="form-input-field">
                                            <option value="New">New</option>
                                            <option value="Update">Update</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-field-group">
                                    <label class="field-label required">PRODUCT / PROMO PAGE</label>
                                    <input type="text" name="productPage" class="form-input-field"
                                        placeholder="Input product or promo page name...">
                                </div>
                            </div>

                            <div class="form-row row-3-col">
                                <div class="form-field-group">
                                    <label class="field-label required">REQUESTOR</label>
                                    <input type="text" name="requestor" class="form-input-field">
                                </div>
                                <div class="form-field-group">
                                    <label class="field-label">DEPARTMENT OWNER</label>
                                    <input type="text" name="deptOwner" class="form-input-field">
                                </div>
                                <div class="form-field-group">
                                    <label class="field-label">PIC</label>
                                    <input type="text" name="pic" class="form-input-field">
                                </div>
                            </div>

                            <div class="form-row row-2-col">
                                <div class="form-field-group">
                                    <label class="field-label">CAMPAIGN TYPE</label>
                                    <input type="text" name="campaignType" class="form-input-field">
                                </div>
                                <div class="form-field-group">
                                    <label class="field-label">DUE DATE</label>
                                    <input type="date" name="dueDate" class="form-input-field" placeholder="dd/mm/yyyy">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-field-group">
                                    <label class="field-label">NOTES</label>
                                    <textarea name="notes" class="form-input-field form-textarea" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="form-row row-3-col">
                                <div class="form-field-group">
                                    <label class="field-label">STATUS</label>
                                    <div class="select-wrapper">
                                        <select name="status" class="form-input-field">
                                            <option value="Pending">Pending</option>
                                            <option value="In Progress">In Progress</option>
                                            <option value="Completed">Completed</option>
                                            <option value="On Hold">On Hold</option>
                                            <option value="Cancelled">Cancelled</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-field-group">
                                    <label class="field-label">COMPLETE DATE</label>
                                    <input type="date" name="completeDate" class="form-input-field"
                                        placeholder="dd/mm/yyyy">
                                </div>
                                <div class="form-field-group">
                                    <label class="field-label">URL</label>
                                    <input type="url" name="url" class="form-input-field">
                                </div>
                            </div>

                            <div class="form-footer-actions">
                                <a href="{{ url('/tracking-request-website') }}" class="btn-form-cancel">Cancel</a>
                                <button type="submit" class="btn-form-submit">Submit Request</button>
                            </div>

                        </form>
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
    <script src="{{ asset('assets/page-tracking-request-website/js/form.js') }}"></script>
@endpush
