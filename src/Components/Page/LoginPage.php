<?php

namespace OmerKamcili\Sadmin\Components\Page;

use Illuminate\Support\Facades\View;
use OmerKamcili\Sadmin\Components\Generic\BreadCrumb;
use OmerKamcili\Sadmin\Components\Interfaces\PageInterface;
use OmerKamcili\Sadmin\Components\Interfaces\AddableBasicAlert;

/**
 * Class LoginPage
 * @package OmerKamcili\Sadmin\Components\Page
 */
class LoginPage implements PageInterface
{

    use AddableBasicAlert;

    /**
     * @var string
     */
    public $forgotPasswordUrl = '';

    /**
     * @var string
     */
    public $signUpUrL = '';

    /**
     * @var string
     */
    public $actionUrl = '';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    private $view = 'pages/login';

    /**
     * LoginPage constructor.
     */
    public function __construct()
    {

        $this->view = config('sadmin.theme') . '/' . $this->view;

    }

    /**
     * @return string
     */
    public function render(): string
    {

        View::share('page', $this);

        return View::make($this->view)->render();

    }

    /**
     * @return BreadCrumb
     * @throws \Exception
     */
    public function getBreadCrumb(): BreadCrumb
    {
        throw new \Exception('Login page doesn\'t contain breadcrumb');
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->render();
    }

}