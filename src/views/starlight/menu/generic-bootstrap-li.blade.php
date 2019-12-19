<li>
    <a href="{{ $row->url }}">
        @if($row->icon)
            <i class="{{ $row->icon }}"></i>
        @endif
        <span class="ml-2">{{ $row->label }}</span>
    </a>
</li>