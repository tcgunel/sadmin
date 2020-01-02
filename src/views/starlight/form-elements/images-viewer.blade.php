<div class="row sadmin-input">
    <label class="col-lg-3 col-md-4 form-control-label">{{ $row->label }}:</label>
    <div class="col-lg-9 col-md-8 mg-t-10 mg-sm-t-0">
        <div class="row">

            @foreach($row->images as $image)
                <div class="col-lg-3 text-center mb-3">
                    <a href="{{ $image['url'] }}">

                        <img src="{{ $image['url'] }}" class="img-thumbnail mb-2">

                        @if(isset($image['buttons']))
                            @foreach($image['buttons'] as $button)

                                <a href="{{ $button['href'] ?? '#' }}" class="btn btn-sm btn-primary">
                                    {{ $button['label'] ?? 'label' }}
                                </a>

                            @endforeach
                        @endif
                    </a>
                </div>
            @endforeach

        </div>

        @if($row->description)

            <small class="form-text text-info">
                {{  $row->description }}
            </small>

        @endif


    </div>
</div>