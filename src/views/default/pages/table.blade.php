@extends('sadmin::default.admin-layout')
@section('page')

    {!! $page->getBreadCrumb() !!}

    <div class="sl-pagebody">

        @include('sadmin::default.alerts.html-alerts', ['alerts' => $page->getBasicAlerts()])

        @if(count($page->filters))
            <div class="card pd-sm-20">
                <form class="row" method="get" action="{{ $page->filterAction }}">
                    @foreach($page->filters as $filter)
                        <div class="col-md-3 mb-2">
                            {!! $filter->render() !!}
                        </div>
                    @endforeach
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-success"
                                style="cursor:pointer;">{{ $page->filterButtonText ?? 'Submit' }}</button>
                    </div>
                </form>
            </div>
            <br>
        @endif

        <div class="card pd-sm-20">
            @if($page->title)
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">{!! $page->title !!}</h6>
            @endif
            @if($page->description)
                <p class="mg-b-30 tx-gray-600">{!! $page->description !!}</p>
            @endif
            <div class="table-responsive">
                <table class="table table-hover table-bordered mg-b-0">
                    <thead class="bg-info">
                    <tr>
                        @foreach($page->getFields() as $key => $foo)
                            <th>{{ $foo }}</th>
                        @endforeach

                        @if($page->getProgress())
                            <th width="1">{{ __('Progress') }}</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($page->getData()) > 0)
                        @foreach($page->getData() as $foo)
                            <tr>
                                @php($foo = (object) $foo)
                                @foreach($page->getFields() as $key => $bar)
                                    <td>
                                        @if(isset($page->formatter[$key]))
                                            {!! $page->formatter[$key]($foo->{$key}, $foo) !!}
                                        @else
                                            {!! $foo->{$key} !!}
                                        @endif
                                    </td>
                                @endforeach
                                @if($page->getProgress())
                                    <td style="display: flex;">{!! $page->getProgress()->render($foo)!!} </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="{{ count($page->getFields()) }}">
                                {{ __('No records') }}
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
            {!! $page->getPagination() !!}
        </div>
    </div>
@endsection
