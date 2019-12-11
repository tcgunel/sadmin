<?php

namespace OmerKamcili\Sadmin\Components\Form;


use OmerKamcili\Sadmin\Components\Interfaces\FormElementInterface;
use Illuminate\Support\Facades\View;

/**
 * Class SelectBox
 * @package OmerKamcili\Sadmin\Components\Form
 */
class SelectBox extends FormElementInterface
{

    /**
     * @var string
     */
    public $view = 'form-elements/select-box';

    /**
     * @return string
     */
    public function render(): string
    {
        return View::make($this->view, ['row' => $this])->render();

    }
}