<div class="flex pt-8 lg:pt-16">
    @if ($paginator->hasPages())
        @php $link_limit = 7; @endphp
        @if (!$paginator->onFirstPage())
            {{-- Previous Page Link --}}
            <span class="group ml-3 flex cursor-pointer items-center border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary"><a href="{{ $paginator->previousPageUrl() }}">Previous</a>
                 <i class="bx bx-left-arrow-alt ml-1 text-primary transition-colors group-hover:text-secondary dark:text-white"></i>
            </span>
        @endif
        {{-- Pagination Elements --}}
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            @php
                $half_total_links = floor($link_limit / 2);
                $from = $paginator->currentPage() - $half_total_links;
                $to = $paginator->currentPage() + $half_total_links;
                if($paginator->currentPage() < $half_total_links) {
                    $to += $half_total_links - $paginator->currentPage();
                }
                if($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                    $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
                }
            @endphp

            @if ($from < $i && $i < $to)
                <span class="ml-3 cursor-pointer border-2 border-{{ ($paginator->currentPage() == $i) ? 'secondary' : 'primary' }} px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary"><a href="{{ $paginator->url($i) }}">{{ $i }}</a></span>
            @endif
        @endfor
        {{-- Next Page Link --}}
        <span class="{{ $paginator->hasMorePages() ? '' : 'disabled' }} group ml-3 flex cursor-pointer items-center border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary"><a href="{{ $paginator->hasMorePages() ? $paginator->nextPageUrl() : '#' }}">Next</a>
        </span>
    @endif
</div>