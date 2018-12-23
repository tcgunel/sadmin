<?php

namespace OmerKamcili\Sadmin\Components\Form;


use OmerKamcili\Sadmin\Components\Interfaces\SadminFormElementInterface;
use OmerKamcili\Sadmin\SadminTextInputTypes;
use Illuminate\Support\Facades\View;


/**
 * Class SadminTextInput
 *
 * @package OmerKamcili\Sadmin\components\form
 */
class SadminTextInput extends SadminFormElementInterface
{

    /**
     * @var
     */
    public $type = SadminTextInputTypes::TEXT;


    /**
     * @var string
     */
    public $view = 'form-elements/text-input';


    /**
     * @return string
     */
    public function render(): string
    {
        View::share('row', $this);

        return View::make($this->view)->render();
    }

}