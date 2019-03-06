<?php

namespace OmerKamcili\Sadmin\Components\Form;


use OmerKamcili\Sadmin\Components\Interfaces\FormElementInterface;
use OmerKamcili\Sadmin\Constants\Form\TextInputTypes;
use Illuminate\Support\Facades\View;


/**
 * Class SadminTextInput
 *
 * @package OmerKamcili\Sadmin\components\form
 */
class TextInput extends FormElementInterface
{

    /**
     * @var
     */
    public $type = TextInputTypes::TEXT;


    /**
     * @var string
     */
    public $view = 'form-elements/text-input';


    /**
     * @return string
     */
    public function render(): string
    {
        return View::make($this->view, ['row' => $this])->render();
    }

}