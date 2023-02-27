@if ($paginator->hasPages())
<button id="pa" style="display: none;" class="md-ripples ripples-bg-immer-weiss">Mostrar paginación</button>
  <div id="background-pagination">
  </div>
  <div id="pagination">
    <nav>
        <ul class="page">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled page__btn" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true"><i class="fa-solid fa-angles-left"></i></span>
                </li>
            @else
                <li class="page__btn">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fa-solid fa-angles-left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled page__dots" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page__numbers active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li class="page__numbers"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page__btn">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fa-solid fa-angles-right"></i></a>
                </li>
            @else
                <li class="page__btn disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true"><i class="fa-solid fa-angles-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
</div>
@endif
