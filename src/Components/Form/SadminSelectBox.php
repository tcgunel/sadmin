<?php

namespace OmerKamcili\Sadmin\Components\Form;


use OmerKamcili\Sadmin\Components\Interfaces\SadminFormElementInterface;
use Illuminate\Support\Facades\View;

/**
 * Class SadminSelectBox
 *
 * @package OmerKamcili\Sadmin\Components\Form
 */
class SadminSelectBox extends SadminFormElementInterface
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
        View::share('row', $this);

        return View::make($this->view)->render();

    }
}