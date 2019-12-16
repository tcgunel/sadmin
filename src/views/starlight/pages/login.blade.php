<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('sadmin.title') }}</title>
    <link rel="stylesheet" href="/assets/admin/css/theme.css">
</head>

<body>

<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

    <form action="{{ $page->actionUrl }}" method="{{ $page->method }}"
          class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">

        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">{{ config('sadmin.title') }}</div>

        <div class="tx-center mg-b-20">{{ config('sadmin.description') }}</div>

        <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="{{ _('Enter your email') }}" required>
        </div>

        <div class="form-group">

            <input name="password" type="password" class="form-control" placeholder="{{ _('Enter your password') }}" required>

            @if($page->forgotPasswordUrl)

                <a href="{{ $page->forgotPasswordUrl }}"
                   class="tx-info tx-12 d-block mg-t-10">{{ _('Forgot password?') }}</a>

            @endif

        </div>

        <button type="submit" class="btn btn-info btn-block">{{ _('Sign In') }}</button>

        @if($page->forgotPasswordUrl)

            <div class="mg-t-60 tx-center">
                <a href="{{ $page->forgotPasswordUrl }}" class="tx-info">{{ _('Sign Up') }}</a>
            </div>

        @endif

        @csrf

    </form>

</div>
</body>
</html>
