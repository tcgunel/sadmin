<?php

namespace OmerKamcili\Sadmin\Components\Page;

use OmerKamcili\Sadmin\components\generic\SadminBreadCrumb;
use OmerKamcili\Sadmin\components\interfaces\SadminFormElementInterface;
use Illuminate\Support\Facades\View;

/**
 * Class SadminFormPage
 *
 * @package OmerKamcili\Sadmin\components\page
 */
class SadminFormPage implements SadminPageInterface
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
     * @param SadminBreadCrumb $breadCrumb
     */
    public function setBreadCrumb(SadminBreadCrumb $breadCrumb)
    {
        $this->breadCrumb = $breadCrumb;
    }

    /**
     * @return SadminBreadCrumb
     */
    public function getBreadCrumb(): SadminBreadCrumb
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
     * @param SadminFormElementInterface $item
     */
    public function addFormItem(SadminFormElementInterface $item): void
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

        return view('pages/form');

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