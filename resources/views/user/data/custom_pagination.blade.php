<ul class="page-numbers justify-content-center">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        {{-- <li class="disabled page-number" style="cursor: disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <i class="icon-arrow-left"></i>
        </li> --}}
    @else
        <li>
            <a class="page-number" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                <i class="icon-arrow-left"></i>
            </a>
        </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        {{-- @if (is_string($element))
            <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
        @endif --}}

        {{-- Array of links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-number active" aria-current="page">{{ $page }}</li>
                @else
                    <li><a class="page-number" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <li>
            <a class="page-number" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                <i class="icon-arrow-right"></i>
            </a>
        </li>
    @else
        {{-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
            <span aria-hidden="true">&rsaquo;</span>
        </li> --}}
    @endif
</ul>

