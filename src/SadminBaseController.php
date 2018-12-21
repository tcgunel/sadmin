<?php

namespace OmerKamcili\Sadmin;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

/**
 * Class SadminBaseController
 *
 * @package OmerKamcili\Sadmin
 */
abstract class SadminBaseController extends BaseController implements SadminBaseInterface
{
    /**
     * SadminBaseController constructor.
     */
    public function __construct()
    {

        View::share('sideMenu', $this->sideBarMenu());
        View::share('profileMenu', $this->profilMenu());

    }

}