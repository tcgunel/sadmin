<div class="row sadmin-input">
    <label class="col-lg-3 col-md-4 form-control-label">{{ $row->label }}:</label>
    <div class="col-lg-9 col-md-8 mg-t-10 mg-sm-t-0">
        <select
                id="{{ $row->id }}"
                name="{{ $row->name }}"
                class="form-control @if(is_array($row->class)){{ implode(' ',$row->class) }} @elseif(is_string($row->class)) {{ $row->class }} @endif
                {{ $errors->get($row->name) ? ' is-invalid' : '' }}"
                data-placeholder="{{ $row->placeholder }}"
                @if($row->multiple) multiple="multiple" @endif
                @if($row->required)required @endif>
            <option label="{{ $row->placeholder }}"></option>
            @foreach($row->data as $key => $label)
                <option value="{{ $key }}" {{ $row->selected == $key ? ' selected' : (old($row->name) === $key ? ' selected' : '') }}>{{ $label }}</option>
            @endforeach

        </select>

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






