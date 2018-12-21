<input id="{{ $row->id }}"
       name="{{ $row->name }}"
       type="{{ $row->type }}"
       class="form-control @if(is_array($row->class)){{ implode(' ',$row->class) }} @elseif(is_string($row->class)) {{ $row->class }} @endif"
       placeholder="{{ $row->placeholder }}"
       value="{{ $row->value }}"
       @if($row->required)required @endif>