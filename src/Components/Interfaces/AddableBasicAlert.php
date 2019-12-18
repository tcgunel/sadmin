<?php

namespace OmerKamcili\Sadmin\Components\Interfaces;

/**
 * Trait AddableBasicAlert
 * @package OmerKamcili\Sadmin\Components\Interfaces
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
    public function addBasicMessage(BasicAlert $alert)
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