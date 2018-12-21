<input
       id="{{ $row->id ? $row->id : uniqid() }}"
       name="{{ $row->name }}"
       type="{{ $row->type }}"
       class="form-control @if(is_array($row->class)){{ implode(' ',$row->class) }} @elseif(is_string($row->class)) {{ $row->class }} @endif"
       placeholder="{{ $row->placeholder }}"
       value="{{ $row->value }}"
       @if($row->required)required @endif>
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