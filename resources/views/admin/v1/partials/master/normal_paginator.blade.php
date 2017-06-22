<ul>
    <!-- previous page -->
    @if($paginator['page'] == 1)
        <li class="disabled">
            <a href="">&laquo;</a>
        </li>
    @else
        <li class="">
            <a href="?limit={{ $paginator['limit'] }}&offset={{ $paginator['offset'] - 20 }}">&laquo;</a>
        </li>
    @endif

    <!-- print [...] -->
    @if($paginator['start'] > 1)
        <li>
            <a href="?limit={{ $paginator['limit'] }}">1</a>
        </li>
        <li class="disabled">
            <span>...</span>
        </li>
    @endif

    <!-- print all the numbered page links -->
    @for($i = $paginator['start'] ; $i <= $paginator['end']; $i++)
        <li class="{{ $page == $i ? 'active' : '' }}">
            <a href="?limit={{ $paginator['limit'] }}&offset={{ $i * 20 }}">{{ $i }}</a>
        </li>
    @endfor

    <!-- print [...] -->
    @if($paginator['end'] < $paginator['last'])
        <li class="disabled">
            <span>...</span>
        </li>
        <li>
            <a href="?limit={{ $paginator['limit'] }}&offset={{ $paginator['last'] * 20 }}">{{ $paginator['last'] }}</a>
        </li>
    @endif

    <!-- next page -->
    @if($paginator['page'] == $paginator['last'])
        <li class="disabled">
            <a href="">&raquo;</a>
        </li>
    @else
        <li class="">
            <a href="?limit={{ $paginator['limit'] }}&offset={{ $paginator['page'] * 20 + 20 }}">&raquo;</a>
        </li>
    @endif
</ul>