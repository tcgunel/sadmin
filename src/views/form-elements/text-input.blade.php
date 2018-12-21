<div class="row sadmin-input">
    <label class="col-lg-3 col-md-4 form-control-label">{{ $row->label }}:</label>
    <div class="col-lg-9 col-md-8 mg-t-10 mg-sm-t-0">
        <input id="{{ $row->id }}"
               name="{{ $row->name }}"
               type="{{ $row->type }}"
               class="form-control @if(is_array($row->class)){{ implode(' ',$row->class) }} @elseif(is_string($row->class)) {{ $row->class }} @endif"
               placeholder="{{ $row->placeholder }}"
               value="{{ $row->value }}"
               @if($row->required)required @endif>
    </div>
</div>