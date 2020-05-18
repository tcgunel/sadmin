@if($alerts)
    @foreach($alerts as $alert)
        <div class="alert alert-{{ $alert->type }}" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong class="d-block d-sm-inline-block-force">{{ ucfirst(_($alert->type)) }}:</strong> {{ $alert->message }}
        </div>
    @endforeach
@endif