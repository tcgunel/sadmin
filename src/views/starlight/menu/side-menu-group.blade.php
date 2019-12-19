<a href="#" class="sl-menu-link @if(in_array(URL::current(), $row->urls))show-sub @endif {{ $row->class }}">
    <div class="sl-menu-item">
        <i class="menu-item-icon tx-22 {{ $row->icon }}"></i>
        <span class="menu-item-label">{{ $row->label }}</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
    </div>
</a>
<ul class="sl-menu-sub nav flex-column">
    @foreach($row->items as $foo)
        <li class="nav-item"><a href="{{ $foo->url }}" class="nav-link {{ $row->class }}"> {{ $foo->label }}</a></li>
    @endforeach
</ul>