<?php

namespace OmerKamcili\Sadmin;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

abstract class SadminBaseController extends BaseController implements SadminBaseInterface
{
    public function __construct()
    {

        View::share('sideMenu', $this->sideBarMenu());
        View::share('profileMenu', $this->profilMenu());


    }

}