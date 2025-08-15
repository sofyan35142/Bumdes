@if ($paginator->hasPages())
<div class="pagination-wrapper">
    <ul class="pagination clearfix">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span><i class="icon-34"></i></span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}"><i class="icon-34"></i></a></li>
        @endif

        {{-- Page Links --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a href="{{ $url }}" class="current">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}"><i class="icon-35"></i></a></li>
        @else
            <li class="disabled"><span><i class="icon-35"></i></span></li>
        @endif
    </ul>
</div>
@endif
