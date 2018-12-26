<div class="ht-80 d-flex align-items-center justify-content-center">
    <nav aria-label="Page navigation">
        <ul class="pagination pagination-basic pagination-primary mg-b-0">
            @if($paginator->getPreviousPage())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->getPreviousPage() }}" aria-label="Next">
                        <i class="fa fa-angle-left"></i>
                    </a>
                </li>
            @endif
            @foreach($paginator->getPages() as $page => $url)
                <li class="page-item {{ $paginator->getCurrentPage() == $page ? ' active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach
            @if($paginator->getNextPage())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->getNextPage() }}" aria-label="Next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</div>