<?php

namespace OmerKamcili\Sadmin\Components\Alert;

use Illuminate\Support\Facades\View;

/**
 * Class BasicAlert
 * @package OmerKamcili\Sadmin\Components\Alert
 */
class BasicAlert
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $view = 'alerts/html-alert';

    /**
     * FormAlert constructor.
     *
     * @param string|null $message
     * @param string|null $type
     */
    public function __construct(string $message, string $type = BasicAlertTypes::SUCCESS)
    {

        $this->message = $message;
        $this->type    = $type;

    }

    /**
     * @return string
     */
    public function render(): string
    {
        return View::make($this->view, ['type' => $this->type, 'message' => $this->message])->render();
    }

}