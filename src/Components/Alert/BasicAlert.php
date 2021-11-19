<?php

namespace TCGunel\Sadmin\Components\Alert;

use Illuminate\Support\Facades\View;

/**
 * Class BasicAlert
 * @package TCGunel\Sadmin\Components\Alert
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
     * BasicAlert constructor.
     *
     * @param string $message
     * @param string $type
     */
    public function __construct(string $message, string $type = BasicAlertTypes::SUCCESS)
    {

        $this->message = $message;
        $this->type    = $type;
        $this->view    = 'sadmin::' . config('sadmin.theme') . '/' . $this->view;

    }

    /**
     * @return string
     */
    public function render()
    {
        return View::make($this->view, ['type' => $this->type, 'message' => $this->message])->render();
    }

}
