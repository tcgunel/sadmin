@if (Session::has('basicAlerts'))

    @foreach(Session::get('basicAlerts') as $alert)
        {!!  $alert->render(); !!}
    @endforeach

@endif