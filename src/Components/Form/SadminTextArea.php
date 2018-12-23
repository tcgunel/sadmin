<?php

namespace OmerKamcili\Sadmin\Components\Form;


use OmerKamcili\Sadmin\Components\Interfaces\SadminFormElementInterface;
use Illuminate\Support\Facades\View;

/**
 * Class SadminTextArea
 *
 * @package OmerKamcili\Sadmin\Components\Form
 */
class SadminTextArea extends SadminFormElementInterface
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
        View::share('row', $this);

        return View::make($this->view)->render();

    }

}