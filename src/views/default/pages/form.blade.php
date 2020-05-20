@extends('sadmin::default.admin-layout')
@section('page')
    {!! $page->getBreadCrumb() !!}
    <div class="sl-pagebody">
        <style>
            .sadmin-input {
                border-left: 1px solid #f1f1f1;
                border-right: 1px solid #f1f1f1;
                border-bottom: 1px solid #f1f1f1;
                padding: 15px;
            }

            .form-container .sadmin-input:first-child {
                border-top: 1px solid #f1f1f1;
            }
        </style>

        @include('sadmin::default.alerts.html-alerts', ['alerts' => $page->getBasicAlerts()])

        <div class="row">
            <div class="col-xl-12 mg-t-25 mg-xl-t-0">
                <form action="{{ $page->action }}" method="{{ $page->method }}" enctype="{{ $page->enctype }}"
                      data-parsley-validate>
                    {{ csrf_field() }}
                    <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                        @if($page->title)
                            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">{{ $page->title }}</h6>
                        @endif
                        @if($page->description)
                            <p class="mg-b-30 tx-gray-600">{{ $page->description }}</p>
                        @endif
                        <div class="form-container">
                            @foreach($page->getForm() as $element)
                                {!! $element !!}
                            @endforeach
                        </div>
                        <div class="row mt-4">
                            <div class="form-layout-footer">
                                <button class="btn btn-info mg-r-5" type="submit">Submit Form</button>
                                <button class="btn btn-secondary" type="button">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('customScripts')
    @foreach($page->getScript() as $script)
        <script>
            {!! $script !!}
        </script>
    @endforeach
@endsection
