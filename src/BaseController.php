<?php

namespace TCGunel\Sadmin;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

/**
 * Class SadminBaseController
 *
 * @package TCGunel\Sadmin
 */
abstract class BaseController extends Controller implements BaseInterface
{
    /**
     * BaseController constructor.
     */
    public function __construct()
    {

        View::share('sideMenu', $this->sideBarMenu());
        View::share('profileMenu', $this->profileMenu());

    }

}
