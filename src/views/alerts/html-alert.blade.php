<div class="alert alert-{{ $type }}" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <strong class="d-block d-sm-inline-block-force">{{ ucfirst(_($type)) }}:</strong> {{ $message }}
</div>