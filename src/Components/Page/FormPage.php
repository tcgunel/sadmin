<?php

namespace OmerKamcili\Sadmin\Components\Page;

use OmerKamcili\Sadmin\components\generic\BreadCrumb;
use OmerKamcili\Sadmin\components\interfaces\FormElementInterface;
use OmerKamcili\Sadmin\Components\Interfaces\PageInterface;
use Illuminate\Support\Facades\View;

/**
 * Class SadminFormPage
 *
 * @package OmerKamcili\Sadmin\components\page
 */
class FormPage implements PageInterface
{

    /**
     * @var
     */
    public $breadCrumb;

    /**
     * @var
     */
    public $form;

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
     * @var string
     */
    private $view = 'pages/form';

    /**
     * @param BreadCrumb $breadCrumb
     */
    public function setBreadCrumb(BreadCrumb $breadCrumb)
    {
        $this->breadCrumb = $breadCrumb;
    }

    /**
     * @return BreadCrumb
     */
    public function getBreadCrumb(): BreadCrumb
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
    public function addFormItem(FormElementInterface $item): void
    {
        $this->form[] = $item;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->render();
    }

    /**
     * @return string
     */
    public function render(): string
    {

        View::share('breadCrumb', $this->getBreadCrumb());
        View::share('page', $this);

        return View::make($this->view)->render();

    }

    /**
     * @param array|string $magic
     */
    public function makeMagic($magic): void
    {

        if (is_string($magic)) {

            $magic = explode('|', $magic);

        }

        foreach ($this->form as $key => $form) {


            if (in_array('required', $magic)) {

                $form->required = true;

            }

            if (in_array('placeholder', $magic)) {

                $form->placeholder = _("Please enter $form->label");

            }

        }

    }

}