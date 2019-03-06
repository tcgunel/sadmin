<?php

namespace OmerKamcili\Sadmin\Components\Form;


use OmerKamcili\Sadmin\Components\Interfaces\FormElementInterface;
use Illuminate\Support\Facades\View;

class TextArea extends FormElementInterface
{

    /**
     * @var int
     */
    public $row = 3;

    /**
     * @var string
     */
    public $view = 'form-elements/text-area';

    /**
     * @return string
     */
    public function render(): string
    {

        return View::make($this->view, ['row' => $this])->render();

    }

}