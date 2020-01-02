<div class="row sadmin-input">
    <label class="col-lg-3 col-md-4 form-control-label">{{ $row->label }}:</label>
    <div class="col-lg-9 col-md-8 mg-t-10 mg-sm-t-0">
        <input
                id="{{ $row->id ? $row->id : uniqid() }}"
                name="{{ $row->name  . ($row->multiple ? '[]' : '') }}"
                type="file"
                {{ $row->multiple ? ' multiple' : '' }}
                class="form-control @if(is_array($row->class)){{ implode(' ',$row->class) }} @elseif(is_string($row->class)) {{ $row->class }} @endif {{ $errors->get($row->name) ? 'is-invalid' : '' }}"
                placeholder="{{ $row->placeholder }}"
                value="{{ $row->value ? $row->value : (old($row->name) ? old($row->name) : '') }}"
                @if($row->required)required @endif>


        @if(isset($errors))

            @if(!$row->multiple && $errors->get($row->name))

                <small class="form-text text-danger">

                    @foreach($errors->get($row->name) as $message)
                        {{ $message }}
                    @endforeach

                </small>

            @else

                <small class="form-text text-danger">

                    @foreach($errors->get($row->name . '.*') as $fileErrors)

                        @foreach($fileErrors as $message)
                            {{ $message }}
                        @endforeach

                    @endforeach

                </small>

            @endif

        @endif

        @if($row->description)

            <small class="form-text text-info">
                {{  $row->description }}
            </small>

        @endif


    </div>
</div>