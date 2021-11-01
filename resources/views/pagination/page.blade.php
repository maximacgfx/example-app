<!--pagination-->
<div class="row justify-content-between align-items-center mb-4">
        <div class="col-lg">
            {{ $posts->links('vendor.pagination.bootstrap-4') }}
        </div>
        <div class="col-lg text-lg-right mt-1 mt-lg-0">
            <span class="wt-font-size-90 text-muted">{{ __('pagination.Page') }} {{ $posts->currentPage() }} {{ __('pagination.of') }} {{ $posts->lastPage() }}</span>
        </div>

    </div>
