<nav class="breadcrumb sl-breadcrumb">
    @foreach($breadCrumbs as $key => $foo)
        @if($key != count($breadCrumbs)-1)
            <a class="breadcrumb-item" href="{{ $foo->url }}">{{ $foo->label }}</a>
        @else
            <span class="breadcrumb-item active">{{ $foo->label }}</span>
        @endif

    @endforeach
</nav>
