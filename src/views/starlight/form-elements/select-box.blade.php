<div class="row sadmin-input">
    <label class="col-lg-3 col-md-4 form-control-label">{{ $row->label }}:</label>
    <div class="col-lg-9 col-md-8 mg-t-10 mg-sm-t-0">
        @php
            $typeClass = $row->script ? '-'.rand ( 100000000 , 999999999 ) : '';
        @endphp
        <select
                id="{{ $row->id ? $row->id : uniqid() }}"
                class="form-control select2{{ $row->search && !$row->script ? '-show-search' : $typeClass }}
                @if(is_array($row->class)){{ implode(' ',$row->class) }} @elseif(is_string($row->class)) {{ $row->class }} @endif
                {{ $errors->get($row->name) ? ' is-invalid' : '' }}"
                data-placeholder="{{ $row->placeholder }}"
                @if($row->required)required @endif>
            <option label="{{ $row->placeholder }}"></option>
            @foreach($row->data as $key => $label)
                <option label="{{ $key }}" {{ $row->selected == $key ? ' selected' : (old($row->name) == $key ? ' selected' : '') }}>{{ $label }}</option>
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

        @if($row->script)
            @section('customScripts')
                <script>
                    $('.select2{{ $typeClass }}').select2({!! $row->script !!});
                </script>
            @endsection
        @endif

    </div>
</div>






