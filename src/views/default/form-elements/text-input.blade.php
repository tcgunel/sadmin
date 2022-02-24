<div class="row sadmin-input">
    @if($row->label)
        <label class="col-lg-3 col-md-4 form-control-label">{{ $row->label }}:</label>
    @endif
    <div class="{{ $row->label ? 'col-lg-9 col-md-8' : 'col-md-12' }} mg-t-10 mg-sm-t-0">
        <input
            id="{{ $row->id ? $row->id : uniqid() }}"
            name="{{ $row->name }}"
            type="{{ $row->type }}"
            class="form-control @if(is_array($row->class)){{ implode(' ',$row->class) }} @elseif(is_string($row->class)) {{ $row->class }} @endif {{ $errors->get($row->name) ? 'is-invalid' : '' }}"
            placeholder="{{ $row->placeholder }}"
            value="{{ $row->value ? $row->value : (old($row->name) && $row->type != 'password' ? old($row->name) : '') }}"
            @if($row->step) step="{{ $row->step }}" @endif
            @if($row->autocomplete) autocomplete="{{ $row->autocomplete }}" @endif
            @if($row->required)required @endif>

        @if(isset($errors) && $errors->get($row->name))

            <small class="form-text text-danger">

                @foreach($errors->get($row->name) as $message)
                    {{ $message }}
                @endforeach

            </small>

        @elseif($row->description)

            <small class="form-text text-info">
                {{  $row->description }}
            </small>

        @endif

    </div>
</div>
