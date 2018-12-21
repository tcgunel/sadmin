<a href="#" class="sl-menu-link @if(in_array(URL::current(), $urls))show-sub @endif">
    <div class="sl-menu-item">
        <i class="menu-item-icon tx-22 {{ $icon }}"></i>
        <span class="menu-item-label">{{ $label }}</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
    </div>
</a>
<ul class="sl-menu-sub nav flex-column">
    @foreach($items as $foo)
        <li class="nav-item"><a href="{{ $foo->url }}" class="nav-link">{{ $foo->label }}</a></li>
    @endforeach
</ul>