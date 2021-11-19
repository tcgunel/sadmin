<?php

namespace TCGunel\Sadmin\Components\Page;

use TCGunel\Sadmin\components\generic\BreadCrumb;
use TCGunel\Sadmin\components\interfaces\FormElementInterface;
use TCGunel\Sadmin\Components\Interfaces\AddableBasicAlert;
use TCGunel\Sadmin\Components\Interfaces\PageInterface;
use Illuminate\Support\Facades\View;

/**
 * Class SadminFormPage
 *
 * @package TCGunel\Sadmin\components\page
 */
class FormPage implements PageInterface
{

    use AddableBasicAlert;

    /**
     * @var
     */
    public $breadCrumb;

    /**
     * @var
     */
    public $form = [];

    /**
     * @var
     */
    public $title;

    /**
     * @var
     */
    public $description;

    /**
     * @var
     */
    public $method = 'post';

    /**
     * @var
     */
    public $action;

    /**
     * @var
     */
    public $enctype;

    /**
     * @var array
     */
    public $basicAlerts = [];

    /**
     * @var array
     */
    public $script = [];

    /**
     * @var string
     */
    private $view = 'pages/form';

    /**
     * FormPage constructor.
     */
    public function __construct()
    {

        $this->view = 'sadmin::' . config('sadmin.theme') . '/' . $this->view;

    }

    /**
     * @param BreadCrumb $breadCrumb
     */
    public function setBreadCrumb(BreadCrumb $breadCrumb)
    {

        $this->breadCrumb = $breadCrumb;

    }

    /**
     * @return BreadCrumb|null
     */
    public function getBreadCrumb()
    {

        return $this->breadCrumb;

    }

    /**
     * @return mixed
     */
    public function getForm(): array
    {

        return $this->form;

    }

    /**
     * @param FormElementInterface $item
     */
    public function addFormItem(FormElementInterface $item)
    {

        $this->form[] = $item;

    }


    /**
     * @param $item
     */
    public function addScript($item)
    {

        $this->script[] = $item;

    }

    /**
     * @return array|null
     */
    public function getScript()
    {

        return $this->script;

    }

    /**
     * @return string
     */
    public function __toString()
    {

        return $this->render();

    }

    /**
     * @return string
     */
    public function render()
    {

        View::share('breadCrumb', $this->getBreadCrumb());
        View::share('page', $this);

        return View::make($this->view)->render();

    }

    /**
     * @param array|string $magic
     */
    public function makeMagic($magic)
    {

        if (is_string($magic)) {

            $magic = explode('|', $magic);

        }

        foreach ($this->form as $key => $form) {


            if (in_array('required', $magic)) {

                if ($form->required == null) {

                    $form->required = true;

                }

            }

            if (in_array('placeholder', $magic)) {

                $form->placeholder = $form->placeholder == null ? _("Please enter $form->label") : $form->placeholder;

            }

        }

    }
}
