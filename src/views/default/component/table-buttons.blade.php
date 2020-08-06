@foreach($items as $foo)
    @php($foo = (object) $foo)
    <a href="{{ $foo->url }}" class="btn btn-{{ $foo->colorType }} btn-icon mr-1 {{ $foo->class }}"
       target="{{ $foo->target }}">
        <div><i class="{{ $foo->icon }}"></i></div>
    </a>
@endforeach
