<!--pagination--> 
<div class="row justify-content-between align-items-center mb-4">
        <div class="col-lg">
            <nav aria-label="Bootstrap Pagination Example">
                <ul class="pagination mb-0">
                <li class="page-item">
                    <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
                </ul>
            </nav>
        </div>
        <div class="col-lg text-lg-right mt-1 mt-lg-0">
            <span class="wt-font-size-90 text-muted">Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</span>
        </div>
        
    </div>