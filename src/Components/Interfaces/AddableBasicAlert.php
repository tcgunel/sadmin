<?php

namespace TCGunel\Sadmin\Components\Interfaces;

use TCGunel\Sadmin\Components\Alert\BasicAlert;

/**
 * Trait AddableBasicAlert
 * @package TCGunel\Sadmin\Components\Interfaces
 */
trait AddableBasicAlert
{

    /**
     * @var array
     */
    public $basicAlerts = [];

    /**
     * @param BasicAlert $alert
     */
    public function addBasicAlert(BasicAlert $alert)
    {
        array_push($this->basicAlerts, $alert);
    }

    /**
     * @return array
     */
    public function getBasicAlerts()
    {
        return $this->basicAlerts;
    }

}
