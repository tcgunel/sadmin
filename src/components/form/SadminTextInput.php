<?php

namespace OmerKamcili\Sadmin\components\form;


use OmerKamcili\Sadmin\components\interfaces\SadminFormElementInterface;
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
    public $type = 'text';

    /**
     * SadminTextInput constructor.
     *
     * @param $properties
     */
    public function __construct($properties)
    {
        parent::__construct($properties);

    }

    /**
     * @return string
     */
    function render(): string
    {
        View::share('row', $this);

        return view('form-elements/text-input');
    }

}