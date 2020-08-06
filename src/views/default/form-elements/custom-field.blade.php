<div class="row sadmin-input">
    @if($row->label)
        <label class="col-lg-3 col-md-4 form-control-label">{{ $row->label }}:</label>
    @endif
    <div class="{{ $row->label ? 'col-lg-9 col-md-8' : 'col-md-12' }} mg-t-10 mg-sm-t-0">{!! $row->value !!}</div>
</div>
