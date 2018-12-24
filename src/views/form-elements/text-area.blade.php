<textarea
        id="{{ $row->id ? $row->id : uniqid() }}"
        name="{{ $row->name }}"
        rows="{{ $row->row }}"
        class="form-control @if(is_array($row->class)){{ implode(' ',$row->class) }} @elseif(is_string($row->class)) {{ $row->class }} @endif {{ $errors->get($row->name) ? 'is-invalid' : '' }}"
        placeholder="{{ $row->placeholder }}"
        @if($row->required)required @endif>{{ $row->value ? $row->value : old($row->name) }}</textarea>
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
