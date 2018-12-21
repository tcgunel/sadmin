<textarea
        id="{{ $row->id ? $row->id : uniqid() }}"
        name="{{ $row->name }}"
        rows="{{ $row->row }}"
        class="form-control @if(is_array($row->class)){{ implode(' ',$row->class) }} @elseif(is_string($row->class)) {{ $row->class }} @endif"
        placeholder="{{ $row->placeholder }}"
        @if($row->required)required @endif
>{{ $row->value }}</textarea>
@if($row->description)
    <small class="form-text text-info">
        {{  $row->description }}
    </small>
@endif

@if(@$row->error)

    <small class="form-text text-danger">
        Your password must be 8-20 characters
    </small>
@endif